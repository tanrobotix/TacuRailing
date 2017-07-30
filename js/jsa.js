// $(document).ready(function(){
//   $(function() {
//     $('#autocompleteGrupo').autocomplete({
//     source: function (request, response) {
//         $.ajax({
//             url: "file.json",
//             dataType: 'json',
//             data: request,
//             success: function( data ) {
//                 response( $.map( data, function( item ) {
//                     return(item.code)
//                 }));
//             }
//         });
//        },
//        minLength: 2
//       });
//     });
// });

$(document).ready(function(){
  $('#search').keyup(function(){
    $('#result').html('');
    var searchField = $('#search').val();
    var expression = new RegExp(searchField, "i");
    $.getJSON('file.json', function(data){
      $.each(data, function(key, value){
        if(value.name.search(expression) != -1 || value.code.search(expression) != -1)
        {
            $('#result').append('<li class="list-group-item">' + value.code + '  | ' + value.name);
        }
      });
    });
  });
});
