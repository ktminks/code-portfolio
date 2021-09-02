$(document).ready(function () {

    $("#submit").click(function () {

        var searchBox = $("#searchBox").val();
        //search url with search term
        var api = "https://en.wikipedia.org/w/api.php?action=opensearch&search=" + searchBox + "&callback=?";

        $.ajax({

            type: "GET",
            //draw JSON information from API link variable
            url: api,
            //something to do with continuously updating? research more
            async: false,
            dataType: "json",
            //on successfully getting data, do stuff
            success: function (data) {
                /* API sends us info in an array.
                  data[0] is search term
                  data[1][i] is array of search result titles
                  data[2][i] is array of search result descriptions
                  data[3][i] is array of search result links */

                //before returning new results, wipe old results
                $("#output").html('');
                //loop through entries of result
                for (var i = 0; i < data[1].length; i++) {
                    //target output list, on each loop insert each result as the first child element
                    $("#output").append("<a href='" + data[3][i] + "' target='_blank' class='text-left'><h3>" + data[1][i] + "</h3></a><br>" + data[2][i] + "<br>" + "<hr>");
                };
            },
            //if get request fails, throw error alert
            error: function (errorMessage) {
                alert("Error");
            }
        });
    });
});