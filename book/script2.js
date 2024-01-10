
$("document").ready(function(){

    $("searchBtn").click(function () {
        var bookName = $("bookName").val(); 
        findBooks(bookName);
        console.log("Button clicked");
    
    });

    $("searchBtn2").click(function () {
        var bookName = $("bookName").val(); 
        findBooks(bookName);
        console.log("Button 2 clicked");
    
    });

    function findBooks(bookName){
        console.log("find books function called");
        $.ajax({
            type: "GET",
            url: "https://www.googleapis.com/books/v1/volumes?q=" + bookName,
            // data: "data",
            // dataType: "dataType",
            success: function (response) {
                console.log(response);
                $(".cardBox").empty();

                for (var i = 0; i < response.items.length; i++) {
                    var book = response.items[i];

                    //create a new card element
                    var card = $("<div>").addClass("card");

                    // Add the book title to the card
                    var title = $("<h3>").addClass("card-title").text(book.volumeInfo.title);
                    card.append(title);

                    // Add the book author to the card
                    var author = $("<p>").addClass("card-author").text(book.volumeInfo.authors[0]);
                    card.append(author);

                    // Add the book image to the card
                    var image = $("<img>").addClass("card-image").attr("src", book.volumeInfo.imageLinks.thumbnail);
                    card.append(image);

                    var description = $("<p>").addClass("desc").text(book.volumeInfo.description);
                    card.append(description);

                    // Append the card to the results container
                    $(".cardBox").append(card);
                }
            }
        });
    }


})