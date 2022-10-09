    function myFunction() {
        // Declare variables
        var input, filter, ul, items, a, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        items = document.getElementsByClassName('searchItem');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < items.length; i++) {
            a = items[i].getElementsByClassName("searchText")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                items[i].style.display = "";
            } else {
                items[i].style.display = "none";
            }
        }
    }
    //     $('.sortme').sort(function (a, b) {
    //         // var atext = a.textContent;
    //         var nameA = a.getElementsByClassName('sortByDate')[0].outerText;
    //         // var btext = b.textContent;
    //         var nameB = b.getElementsByClassName('sortByDate')[0].outerText;
    //         if (nameA < nameB) {
    //             return -1;
    //         } else {
    //             return 1;
    //         }
    //     }).appendTo('sortingDiv');


    $(document.body).on('change', "#selectSortOption", function (event) {

        var e = document.getElementById('selectSortOption').value;
        var sortBy;
        if (e == 1) {
            sortBy = 'searchText';
        } else {
            sortBy = 'sortByDate';
        }

        var list, i, switching, b, shouldSwitch, nameA, nameB;
        list = document.getElementById("id01");
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            b = list.getElementsByClassName("sortme");
            // Loop through all list items:
            for (i = 0; i < (b.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Check if the next item should
                switch place with the current item: */
                nameA = b[i].getElementsByClassName(sortBy)[0].outerText.toLowerCase();
                nameB = b[i + 1].getElementsByClassName(sortBy)[0].outerText.toLowerCase();
                if (nameA > nameB) {
                    /* If next item is alphabetically lower than current item,
                    mark as a switch and break the loop: */
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark the switch as done: */
                b[i].parentNode.insertBefore(b[i + 1], b[i]);
                switching = true;
            }
        }
    });
