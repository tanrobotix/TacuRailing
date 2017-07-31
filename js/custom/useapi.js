var sendRequest = function(){
var FlightRequest = {
    "request": {
      "slice": [
        {
          "origin": "NRT",
          "destination": "ICN",
          "date": "2017-07-28"
        }
      ],
      "passengers": {
        "adultCount": 1,
        "infantInLapCount": 0,
        "infantInSeatCount": 0,
        "childCount": 0,
        "seniorCount": 0
      },
      "solutions": 20,
      "refundable": false
    }
};

    $.ajax({
     type: "POST",
     url: "https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyA-Z_OABlCvKJj9Y7VWMNee6TaHQFbXFyI",
     contentType: 'application/json',
     dataType: 'json',
     data: JSON.stringify(FlightRequest),
     success: function (data) {

      var myJSON = JSON.stringify(data);

      console.log(myJSON);

      $("#show").html(myJSON);

    },
      error: function(){
       alert("Access to Google QPX Failed.");
     }
    });
};

$(document).ready(function(){
    $("button").click(function(){sendRequest();});
});
var sendRequest = function(){
var FlightRequest = {
    "request": {
      "slice": [
        {
          "origin": "NRT",
          "destination": "ICN",
          "date": "2017-07-28"
        }
      ],
      "passengers": {
        "adultCount": 1,
        "infantInLapCount": 0,
        "infantInSeatCount": 0,
        "childCount": 0,
        "seniorCount": 0
      },
      "solutions": 20,
      "refundable": false
    }
};

    $.ajax({
     type: "POST",
     url: "https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyA-Z_OABlCvKJj9Y7VWMNee6TaHQFbXFyI",
     contentType: 'application/json',
     dataType: 'json',
     data: JSON.stringify(FlightRequest),
     success: function (data) {

      var myJSON = JSON.stringify(data);

      console.log(myJSON);

      $("#show").html(myJSON);

    },
      error: function(){
       alert("Access to Google QPX Failed.");
     }
    });
};

$(document).ready(function(){
    $("button").click(function(){sendRequest();});
});
