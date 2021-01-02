<script>
$(document).ready(() => {

    function load_data(query) {
        $.ajax({
            url: "fetch.php",
            method: "post",
            data: {
                query: query
            },
            success: (data) => {
                console.log(data);
                $('#result').html(data);
            }
        });
    }

    $('#search').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
          $('#result').html("");
        }
    });

    $("table").on('click', 'tbody tr', (event) => {
            var id = $(event.currentTarget).attr("id");
            if (id != null) {
                window.location.href = `http://localhost/ProXX/Home/item.php?id=${id}`;
            }
        })
});

</script>