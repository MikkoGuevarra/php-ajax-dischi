$(document).ready(function(){
    const source   = $('#card-template').html();
    const template = Handlebars.compile(source);

    if ($('#ajax-vers').length) {
        $.ajax({
            url: '../dbase/dischi.php',
            method: 'GET' ,
            success: function(data) {
                var genresArray = [];
                for (var i = 0; i < data.length; i++) {
                    // console.log(data[i].title);
                    var context = {
                        poster: data[i].poster,
                        title: data[i].title,
                        author: data[i].author,
                        year: data[i].year
                    };
                    var html    = template(context);
                    $('.card-container').append(html);
                    console.log(data[i].genre);
                    if (!genresArray.includes(data[i].genre)) {
                        genresArray.push(data[i].genre);
                    }
                }
                genresArray.forEach((genre) => {
                    $('.genres').append(`
                        <option value="${genre}">${genre}</option>`);
                });

            },
            error: function() {
                console.log('error');
            },
        });
    }

    //intercetto cambio genre

    $('.genres').change(function(){
        //svuoto container
        $('.card-container').empty();
        //prendo val del genre selected
        var selectedGenre = $(this).val();

        $.ajax({
            url: '../dbase/dischi.php',
            method: 'GET' ,
            data: {
                genre: selectedGenre
            },
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    console.log(data[i].title);
                    var context = {
                        poster: data[i].poster,
                        title: data[i].title,
                        author: data[i].author,
                        year: data[i].year
                    };
                    var html    = template(context);
                    $('.card-container').append(html);
                }
            },
            error: function() {
                console.log('error');
            },
        });
    })
});
