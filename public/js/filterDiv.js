filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    y = document.getElementsByClassName("markdoneBtn");
    z = document.getElementsByClassName("markundoneBtn");

    if (c == "all") {
        c = "";
        for (i = 0; i < x.length; i++) {
            w3AddClass(z[i], "hideBtn");
            w3AddClass(y[i], "hideBtn");
            w3RemoveClass(z[i], "showBtn");
            w3RemoveClass(y[i], "showBtn ");
        }
    }
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        // console.log(x[i]);
        w3RemoveClass(x[i], "showDiv");
        if (x[i].className.indexOf(c) > -1) {
            w3AddClass(x[i], "showDiv");
        }
    }
    if (c == "pending") {
        for (i = 0; i < y.length; i++) {
            w3RemoveClass(y[i], "hideBtn");
            w3AddClass(y[i], "showBtn");
        }
        for (i = 0; i < z.length; i++) {
            w3RemoveClass(z[i], "showBtn");
            w3AddClass(z[i], "hideBtn");
        }
    }
    if (c == "fulfilled") {
        for (i = 0; i < y.length; i++) {
            w3RemoveClass(y[i], "showBtn ");
            w3AddClass(y[i], "hideBtn");
        }
        for (i = 0; i < z.length; i++) {
            w3RemoveClass(z[i], "hideBtn");
            w3AddClass(z[i], "showBtn");
        }
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("mybtn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
