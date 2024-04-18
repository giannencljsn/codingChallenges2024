$(document).ready(function () {
    //Validate json file
        try{
            JSON.parse(JSON.stringify(data))
            console.log("Source is valid json.");
            //select table body to append rows
            var table = $('#example').DataTable();
            var authorsData = data.authors;

            //rendering json data
            authorsData.forEach(function(author){
            var row = $('<tr>');
            row.append($('<td>').text(author.id));
            row.append($('<td>').text(author.first_name + " "+ author.last_name));
          
            //variable to store book titles
            var bookTitles = ""; 
            var salesPerBook = "";
            var totalPurchases = 0 
                author.books.forEach(book => {    
                    bookTitles += book.title + "<br>";
                    salesPerBook += book.purchases.length + "<br>";
                    totalPurchases += book.purchases.length;
                    
                });
            row.append($('<td>').html(bookTitles));
            row.append($('<td>').html(salesPerBook));
            row.append($('<td>').html(totalPurchases));
            //Append row to the table 
            table.row.add(row).draw();
        
            });
        }catch (error){
            alert("Invalid JSON data: ", error);
        }     
    });