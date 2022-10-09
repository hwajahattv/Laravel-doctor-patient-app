@extends('doctor.parent.master')
@section('css')
    <link href="{{ asset('/css/bootstrapList.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/filterDiv.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchDiv.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container myUL">
        <div class="text-center mb-5">
            <h3>List of scheduled appointments</h3>
            <p class="lead">aaa</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by patient name">
            </div>

            <!-- Control buttons -->
            <div id="myBtnContainer" class="col-md-4 d-flex justify-content-around">
                <button class="btn active mybtn" onclick="filterSelection('all')"> Show all</button>
                <button class="btn mybtn" onclick="filterSelection('pending')"> Pending</button>
                <button class="btn mybtn" onclick="filterSelection('fulfilled')"> Processed</button>
            </div>
            <select class="form-select" id="selectSortOption" aria-label="Default select example">
                <option selected>--Sort by--</option>
                <option value="1">Patient Name</option>
                <option value="2">Appointment Date (Earliest first)</option>
            </select>
        </div>
        <div class="sortingDiv" id="id01">
            @foreach ($AppointmentData as $Appointment)
                <div class="filterDiv {{ $Appointment->status }} sortme">
                    <div class="card-body searchItem ">
                        <div class="d-flex flex-column flex-lg-row">
                            <span class="avatar avatar-text rounded-3 me-4 mb-2"><img
                                    src="{{ asset('images/uploads/patient/profilePic') }}/{{ $Appointment->Patient->profilePicture }}"
                                    alt="" style="width: 48px"></span>
                            <div class="row flex-fill">
                                <div class="col-sm-3">
                                    <h4 class="h5 sortName searchText">{{ $Appointment->name }}</h4>
                                    <span class="badge bg-secondary">Department</span> <span
                                        class="badge bg-success">{{ $Appointment->message }}</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" class="findDate" name="timeleft"
                                        value="{{ $Appointment->date }}" id="timeleft" />
                                    <input type="hidden" class="slotId" name="slotId"
                                        value="{{ $Appointment->doctor_slot->slot_number }}" />
                                    <h4 class="h5 sortByDate">{{ $Appointment->date }}</h4>
                                    <span
                                        class="badge bg-secondary slotDetails">{{ $Appointment->doctor_slot_id }}</span>
                                    <span class="badge bg-success">$60K -
                                        $100K</span>
                                    <div class="putcountdown">
                                        <span class="days badge btn-success text-white"></span>
                                        <span class="hours "></span>
                                        <span class="mins"></span>
                                        <span class="secs"></span>
                                        <h2 class="end badge"></h2>
                                    </div>
                                </div>
                                <div class="col-sm-3 py-2">
                                    <span class="badge bg-secondary">{{ $Appointment->mobileNumber }}</span>
                                    <span class="badge bg-secondary">{{ $Appointment->message }}</span>
                                    <span class="badge bg-secondary">TYPESCRIPT</span>
                                    <span class="badge bg-secondary">JUNIOR</span>
                                </div>
                                <div class="col-sm-3 text-lg-end">
                                    <div class="hideBtn markdoneBtn"><a
                                            href="{{ url('/doneAppointment/' . $Appointment->id) }}"
                                            class="btn btn-success  " role="button">Mark
                                            done</a></div>
                                    <div class="hideBtn markundoneBtn"><a
                                            href="{{ url('/undoneAppointment/' . $Appointment->id) }}"
                                            class="btn btn-success " role="button">Mark pending</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var slotIdObject = document.getElementsByClassName('slotId');
        var slotId = [];
        for (var i = 0; i < slotIdObject.length; i++) {
            slotId[i] = slotIdObject[i].value;
        }
        // console.log(slotId);
        var slotHourStart;
        var slotminStart;
        var slotHourEnd;
        var slotminSEnd;
        var nHTML = "";
        var startAmPm = "AM";
        var endAmPm = "AM";
        var len = slotId.length;
        if (len > 0) {
            for (var i = 0; i < len; i++) {
                // var slot_id = response.slotData[i].id;
                var slot = slotId[i];
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
                $.each($(".slotDetails"), function(index) {
                    document.getElementsByClassName("slotDetails")[index].innerHTML = slotHourStart +
                        ":" + slotMinStart + startAmPm + "-" +
                        slotHourEnd + ":" + slotMinEnd + endAmPm;
                });
            }
        }
        var testObject = [];
        $.each($(".findDate"), function(index, fieldTest) {
            //     alert(fieldTest.value);
            testObject.push(fieldTest.value);
        });
        var elements = document.getElementsByClassName('findDate').length;
        var days = [];
        var hours = [];
        var mins = [];
        var secs = [];
        var slotstart;
        var startTimeMin;
        var startTimeHour;
        for (var i = 0; i < elements; i++) {
            var countDownDate = testObject[i];
            countDownDate = new Date(countDownDate);
            yearx = countDownDate.getFullYear();
            monthx = countDownDate.getMonth();
            dateOfAppointment = countDownDate.getDate();
            slotstart = slotId[i];
            startTimeHour = slotstart / 2;
            if (slotstart % 2 == 0) {
                startTimeMin = 0;
            } else {
                startTimeMin = 30;
            }
            countDownDate = new Date(yearx, monthx, dateOfAppointment, startTimeHour - 4, startTimeMin, 0, 0);
            var myfunc = setInterval(function() {}, 1000);
            var now = new Date().getTime();
            var timeleft = countDownDate - now;

            var adays = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            var ahours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var aminutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            var aseconds = Math.floor((timeleft % (1000 * 60)) / 1000);
            days.push(adays);
            hours.push(ahours);
            mins.push(aminutes);
            secs.push(aseconds);
        }
        $.each($(".putcountdown"), function(index) {
            if (days[index] > 0) {
                if (days[index] < 1) {
                    document.getElementsByClassName("hours")[index].innerHTML = hours[index] + "h ";
                    document.getElementsByClassName("mins")[index].innerHTML = mins[index] + "m ";
                    document.getElementsByClassName("secs")[index].innerHTML = secs[index] + "s";
                } else {
                    document.getElementsByClassName("days")[index].innerHTML = days[index] + " days later ";
                }
            } else {
                clearInterval(myfunc);
                document.getElementsByClassName("days")[index].innerHTML = ""
                document.getElementsByClassName("hours")[index].innerHTML = ""
                document.getElementsByClassName("mins")[index].innerHTML = ""
                document.getElementsByClassName("secs")[index].innerHTML = ""
                document.getElementsByClassName("end")[index].innerHTML = "TIME UP!!";
                //     }
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/filterDiv.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/searchDiv.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@endsection
