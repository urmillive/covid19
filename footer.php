<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Bootstrap js /close -->


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


<!-- Jquery Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<?php if (isset($_SESSION['error'])) {
?>
    <script>
        $.confirm({
            title: 'Alert!',
            content: '<?php echo $_SESSION['error']; ?>',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: function() {}
            }
        });
    </script>
<?php
}
unset($_SESSION['error']);
if (isset($_SESSION['success'])) {
?>
    <script>
        $.confirm({
            title: 'Success!',
            content: '<?php echo $_SESSION['success']; ?>',
            type: 'green',
            typeAnimated: true,
            buttons: {
                close: function() {}
            }
        });
    </script>

<?php
    unset($_SESSION['success']);
}
?>
<script>
    function myscroll() {
        var elmnt = document.getElementById("prevent");
        elmnt.scrollIntoView();
    }
</script>

</body>

</html>