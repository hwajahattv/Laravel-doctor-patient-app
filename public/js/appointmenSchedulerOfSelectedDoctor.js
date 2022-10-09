$(document).ready(function () {
    //     $(document.body).on('click', "#datepicker", function (event) {
    var id = document.getElementById("selectDoctor").value; //get doctor id from hidden input
    var dayData = document.getElementById("availableDay").value; //get doctor id from hidden input

    console.log(dayData);

    function sundaysInMonth(m, y) {
        var numberOfDaysInThisMonth = new Date(y, m, 0).getDate(); // number of days in current month
        //     console.log(days);
        var collectAllDaysNew = [];

        for (var j = 7; j > 0; j--) {
            if (dayData.includes(j)) {
                var sundays = [j + 1 - (new Date(m + '/01/' + y).getDay())];
                for (var i = sundays[0] + 7; i < numberOfDaysInThisMonth; i += 7) {
                    collectAllDaysNew.push(i);
                }
            }
        }
        return collectAllDaysNew;
    }

    var adate = new Date();
    var amonth = adate.getMonth() + 1;
    var ayear = adate.getFullYear();
    datesOfMonth = sundaysInMonth(amonth, ayear);
    var dates_avail = datesOfMonth;

    function isAvailable(date) {
        var dt = date.getDate();
        if (dates_avail.indexOf(dt) != -1) {
            return [true, "", ""];
        } else {
            return [false, "", ""];
        }



    }
    $('#datepicker').datepicker('destroy').datepicker({
        beforeShowDay: isAvailable,
        dateFormat: "dd-mm-yy",
        minDate: 0,
        firstDay: 1,
    });

    // });
    // });
    $(document.body).on('change', "#datepicker", function (event) {
        var id = document.getElementById("selectDoctor").value; // get the doctor id
        var dateSelected = $(datepicker).datepicker('getDate'); // get the date selected by the user
        var dayToFindSlots = dateSelected.getUTCDay() + 1; // get the day against the selected date
        // show the values of the variables on console
        console.log(id);
        console.log(dateSelected);
        console.log(dayToFindSlots);
        $("#availableDay").val(dayToFindSlots);



        // $('#availableSlots').find('option').not(':first').remove();

        $.ajax({
            url: 'getAvailableSlots/' + id + '/' + dayToFindSlots,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                var len = 0;

                if (response.slotData != null) {
                    len = response.slotData.length;
                }
                var slotHourStart;
                var slotminStart;
                var slotHourEnd;
                var slotminSEnd;
                var nHTML = "";
                var startAmPm = "AM";
                var endAmPm = "AM";
                if (len > 0) {
                    for (var i = 0; i < len; i++) {
                        var slot_id = response.slotData[i].id;
                        var slot = response.slotData[i].slot_number;
                        console.log("slot id is:" + slot_id);

                        if (slot == 0) {
                            slotHourStart = "12";
                            slotMinStart = "00";
                            slotHourEnd = "12";
                            slotMinEnd = "30";
                            startAmPm = "AM";
                            endAmPm = "AM";
                        } else if (slot == 23) {
                            slotHourStart = "11";
                            slotMinStart = "30";
                            slotHourEnd = "12";
                            slotMinEnd = "00";
                            startAmPm = "AM";
                            endAmPm = "Noon";
                        } else if (slot == 24) {
                            slotHourStart = "12";
                            slotMinStart = "00";
                            slotHourEnd = "12";
                            slotMinEnd = "30";
                            startAmPm = "Noon";
                            endAmPm = "PM";
                        } else if (slot == 25) {
                            slotHourStart = "12";
                            slotMinStart = "30";
                            slotHourEnd = "1";
                            slotMinEnd = "00";
                            startAmPm = "PM";
                            endAmPm = "PM";
                        } else if (slot == 47) {
                            slotHourStart = "11";
                            slotMinStart = "30";
                            slotHourEnd = "12";
                            slotMinEnd = "00";
                            startAmPm = "PM";
                            endAmPm = "AM";
                        } else {
                            slotHourStart = Math.floor(slot / 2);
                            if (slot % 2 == 0) {
                                slotMinStart = '00';
                                slotMinEnd = '30';
                                slotHourEnd = slotHourStart;

                            } else {
                                slotMinStart = '30';
                                slotMinEnd = '00';
                                slotHourEnd = slotHourStart + 1;
                            }
                            if (slot > 25 && slot < 47) {
                                slotHourStart -= 12;
                                slotHourEnd -= 12;
                                startAmPm = "PM";
                                endAmPm = "PM";
                            } else {
                                startAmPm = "AM";
                                endAmPm = "AM";
                            }
                        }
                        // create the buttons for availableSlots 

                        nHTML += '<button class="btn btn-warning testButton"value="' + slot_id + '">' + slotHourStart +
                            ":" + slotMinStart + startAmPm + "-" +
                            slotHourEnd + ":" + slotMinEnd + endAmPm + '</button>';

                        document.getElementById("availableSlotsButtons").innerHTML = '<ul>' + nHTML + '</ul>';
                        const slotButton = document.getElementsByClassName("testButton");
                        $(slotButton).click(function () {
                            //     alert($(this).val());
                            //     $("#availableSlots").attr("value") = $(this).val();
                            var slotRefId = $(this).val();
                            $("#availableSlots").val(slotRefId);
                        });


                        // create the dropdown for availableSlots

                        // var option = "<option value='" + id + "'>" + slotHourStart +
                        //     ":" + slotMinStart + "----" +
                        //     slotHourEnd + ":" + slotMinEnd + "</option>";
                        // $("#availableSlots").append(option);
                    }
                }
            }
        });
    });
    // previous code for day selection through dropdown
    //     $(document.body).on('change', "#availableDays", function (event)
    //         //     $('#selectDoctor').change(function() 
    //         {
    //             var id = $("#selectDoctor").val();
    //             var day = $("#availableDays").val();

    //             $('#availableSlots').find('option').not(':first').remove();

    //             $.ajax({
    //                 url: 'getAvailableSlots/' + id + '/' + day,
    //                 type: 'get',
    //                 dataType: 'json',
    //                 success: function (response) {
    //                     var len = 0;
    //                     if (response.slotData != null) {
    //                         len = response.slotData.length;
    //                     }
    //                     var slotHourStart;
    //                     var slotminStart;
    //                     var slotHourEnd;
    //                     var slotminSEnd;
    //                     if (len > 0) {
    //                         for (var i = 0; i < len; i++) {
    //                             var id = response.slotData[i].id;
    //                             var slot = response.slotData[i].slot_number;
    //                             //     console.log(day);
    //                             slotHourStart = Math.floor(slot / 2);
    //                             if (slotHourStart > 23) slotHourStart = 23;
    //                             if (slot % 2 == 0) {
    //                                 slotMinStart = '00';
    //                                 slotMinEnd = '30';
    //                                 slotHourEnd = slotHourStart;

    //                             } else {
    //                                 slotMinStart = '30';
    //                                 slotMinEnd = '00';
    //                                 slotHourEnd = slotHourStart + 1;
    //                             }
    //                             var option = "<option value='" + id + "'>" + slotHourStart +
    //                                 ":" + slotMinStart + "----" +
    //                                 slotHourEnd + ":" + slotMinEnd + "</option>";
    //                             $("#availableSlots").append(option);
    //                         }
    //                     }
    //                 }

    //             });
    //         });

});
