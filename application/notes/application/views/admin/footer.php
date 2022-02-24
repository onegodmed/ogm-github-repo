  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
    <script>
        //loader script
   $(window).on('load', function(){ 
    $(".loader").fadeOut();
    }); 
   
        $(document).ready(function (){
            $("#check_all").click(function(){
                $('.checkbox').not(this).prop('checked', this.checked);
            });

            $('#listTable').DataTable();
        });

    </script>

</body>
</html>