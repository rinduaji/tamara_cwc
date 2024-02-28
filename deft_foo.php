<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            by Infratel Mlg &copy; 2018
        </p>
    </div>
</footer>

</div>
</div>


</body>
<script>
        function validateInput(textarea) {
            const inputText = textarea.value;
            const cleanText = removeSpecialCharacters(inputText);
            textarea.value = cleanText;
        }

        function removeSpecialCharactersExceptHash(text) {
            // Ganti karakter khusus kecuali tanda pagar (#) dengan karakter kosong (hapus karakter khusus)
            return text.replace(/[^\w\s#-]/gi, '');
        }
    </script>

<script>
    function funcPilihStatus() {
        var x = document.getElementById("pilihan_status");
        if(x.value == 'Valid / Not Valid') {
            document.getElementById("valid").disabled = false;
            document.getElementById("novalid").disabled = false;
            document.getElementById("tl").disabled = true;
            document.getElementById("pilihan_return_tl").disabled = true;
        }
        else if(x.value == 'Return TL') {
            document.getElementById("valid").disabled = true;
            document.getElementById("novalid").disabled = true;
            document.getElementById("tl").disabled = false;
            document.getElementById("pilihan_return_tl").disabled = false;
        }
        else if(x.value == '') {
            document.getElementById("valid").disabled = true;
            document.getElementById("novalid").disabled = true;
            document.getElementById("tl").disabled = true;
            document.getElementById("pilihan_return_tl").disabled = true;
        }
    }

    $(document).ready(function() {

        $('#summernote').summernote();
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var item_username = $(this).data('username');
            var item_name = $(this).data('name');
            var item_jabatan = $(this).data('jabatan');
            if (item_id == '') {
                $('input[name=item-id]').val('');
                $('input[name=username_login]').val('');
                $('input[name=name]').val('');
                $('input[name=jabatan]').val('');
            } else {
                $('input[name=item-id]').val(item_id);
                $('input[name=username_login]').val(item_username);
                $('input[name=name]').val(item_name);
                $('input[name=jabatan]').val(item_jabatan);
                alert("data Telah dipilih");
            }
            $('#modal-item').modal('hide');
        });

        $(document).on('click', '#select_paket_streaming', function() {
            var item_id = $(this).data('id');
            var paket_streaming = $(this).data('paketstreaming');
            var speed_asal = $(this).data('speedasal');
            var speed_tujuan = $(this).data('speedtujuan');
            var param = $(this).data('param');
            var internet = $(this).data('internet');
            var ott1 = $(this).data('ott1');
            var ott2 = $(this).data('ott2');
            
            if (item_id == '') {
                $('input[name=id_paket_streaming]').val('');
                $('input[name=paket_streaming]').val('');
                $('input[name=speed_asal]').val('');
                $('input[name=speed_tujuan]').val('');
                $('input[name=param]').val('');
                $('input[name=internet]').val('');
                $('input[name=ott1]').val('');
                $('input[name=ott2]').val('');
            } else {
                $('input[name=id_paket_streaming]').val(item_id);
                $('input[name=paket_streaming]').val(paket_streaming);
                $('input[name=speed_asal]').val(speed_asal);
                $('input[name=speed_tujuan]').val(speed_tujuan);
                $('input[name=param]').val(param);
                $('input[name=internet]').val(internet);
                $('input[name=ott1]').val(ott1);
                $('input[name=ott2]').val(ott2);
                alert("Data (" + paket_streaming + ") Telah dipilih ");
            }
            $('#modal-item').modal('hide');
        });

        $(document).on('click', '#tombol', function() {
            $('input[name=item-id]').val('');
            $('input[name=username_login]').val('');
            $('input[name=name]').val('');
            $('input[name=jabatan]').val('');
        });
        
    });

    $(document).ready(function() {
        // updating the view with notifications using ajax
        function load_unseen_notification(view = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    view: view
                },
                success: function(data) {
                    console.log("berhasil update " + data);
                }
            });
        }
        load_unseen_notification();

        function load_unseen_notification_recall_agent(view = '') {
            $.ajax({
                url: "fetch_recall_agent.php",
                method: "POST",
                data: {
                    view: view
                },
                success: function(data) {
                    console.log("berhasil update " + data);
                }
            });
        }
        load_unseen_notification_recall_agent();
        // submit form and get new records
        // $('#comment_form').on('submit', function(event) {
        //     event.preventDefault();
        //     if ($('#subject').val() != '' && $('#comment').val() != '') {
        //         var form_data = $(this).serialize();
        //         $.ajax({
        //             url: "insert.php",
        //             method: "POST",
        //             data: form_data,
        //             success: function(data) {
        //                 $('#comment_form')[0].reset();
        //                 load_unseen_notification();
        //             }
        //         });
        //     } else {
        //         alert("Both Fields are Required");
        //     }
        // });
        // // load new notifications
        $(document).on('click', '.dropdown-toggle', function() {
            $('.count').html('');
            load_unseen_notification('yes');
        });

        $(document).on('click', '.dropdown-toggle-recall-agent', function() {
            $('.count').html('');
            load_unseen_notification_recall_agent('yes');
        });
        // setInterval(function() {
        //     load_unseen_notification();;
        // }, 5000);

 
    });
</script>
<!-- <script src="../assets/js/jquery-3.5.1.min.js"></script> -->
<!--   Core JS Files   -->
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

<!--  Charts Plugin! kmrn dimatikan -->
<!-- <script src="../assets/js/chartist.min.js"></script> -->

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript  -->
<script src="../assets/js/bootstrap-dashboard-light.js"></script>
<script src="../assets/sweetalert/sweetalert2.all.min.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! kmrn dimatikan-->
<!-- <script src="../assets/js/demo.js"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
</html>