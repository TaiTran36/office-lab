<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#register").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 25,
                },
                password_confirmation: {
                    required: true,
                    minlength: 8,
                    maxlength: 25,
                    equalTo: "#password",
                },
            },
            messages: {
                email: {
                    required: "Không được để trống",
                    email: "Nhập đúng định dạng email",
                },
                password: {
                    required: "Không được để trống",
                    minlength: "Cần nhập lớn hơn 8 kí tự",
                    maxlength: "Cần nhập it hơn 25 kí tự",
                },
                password_confirmation: {
                    required: "Không được để trống",
                    minlength: "Cần nhập lớn hơn 8 kí tự",
                    maxlength: "Cần nhập it hơn 25 kí tự",
                    equalTo: "Cần nhập đúng với password",
                },
            },
            errorElement: 'span', // default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            ignore: '', // validate all fields including form hidden input

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group .form-control').addClass('is-invalid') // set invalid class to the control group
            },
            unhighlight: function(element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group .form-control').removeClass('is-invalid') // set invalid class to the control group
                    .closest('.form-group .form-control').addClass('is-valid')
            },
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent())
                } else {
                    error.insertAfter(element)
                }
            },
            success: function(label) {
                label
                    .closest('.form-group .form-control').removeClass('is-invalid') // set success class to the control group
            },
            submitHandler: function(form) {
                let formData = new FormData();
                formData.append('email', $('#email').val());
                formData.append('password', $('#password').val());
                formData.append('password_confirmation', $('#password_confirmation').val());
                formData.append('action', 'register_user');
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: '<?php echo admin_url('admin-ajax.php '); ?>',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(data) {
                        $('#btn-register').prop('disabled', false);
                        if (data.success == true) {

                        } else {
                            if (data.data.email) {
                                $('#email_register-error').text('このメールアドレスはアカウント取得済みです。ログインの上ご利用ください。')
                            }
                            if (data.data.password) {
                                $('#password_register-error').text(data.data.password[0])
                            }
                            if (data.data.phone) {
                                $('#phone-error').text('電話番号の値は既に存在しています。')
                            }
                        }
                    }
                })
            }
        });

    })
</script>
