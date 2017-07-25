$(document).ready(function(){
    $("button").click(function(){
        $.getJSON('./skyscanner.json', function(data){
          console.log(data);
        });
    });
});
