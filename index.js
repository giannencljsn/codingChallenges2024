$(document).ready(function () {
    //Validate json file
    try {
        $.getJSON("data.json", function (data) {
            let jsonData = JSON.parse(JSON.stringify(data));
            console.log("Source is valid JSON.");
            let table = $('#example').DataTable();
            let authorsData = jsonData.authors;
        
            authorsData.forEach(function(author) {
                let row = $('<tr>');
                if(!author.books.length){
                    let bookIsFalse = author.books.length;
                    row.append($('<td>').text(author.id));
                    row.append($('<td>').text(author.first_name + " " + author.last_name));
                    row.append($('<td>').text(bookIsFalse));
                    row.append($('<td>').text(bookIsFalse));
                    table.row.add(row).draw();
                    
                }
                author.books.forEach(book => {
                    let row = $('<tr>');
                    let authorID = author.id;
                    let authorName = author.first_name + " " + author.last_name;
                    let bookTitle = book.title;
                    let totalPurchases = book.purchases.length;
                    row.append($('<td>').text(authorID));
                    row.append($('<td>').text(authorName));
                    row.append($('<td>').text(bookTitle));
                    row.append($('<td>').text(totalPurchases));
                    
                    table.row.add(row).draw();
                });
            });
            }
        );
        
    } catch (error) {
        alert("Invalid JSON data: " + error.message);
    }
});