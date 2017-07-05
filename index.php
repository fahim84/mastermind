<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<style>
    .borderless td, .borderless th {
        border: none;
        border-top:none;
    }
</style>
<body>

<header class="container-fluid text-center">
    <p>Header</p>
</header>

<div class="content container">
    <div class="row">

        <table class="table borderless" >
            <tr>
                <th></th>
                <th>NOVOMIXIANS</th>
                <th>LEVEMIRIANS</th>
                <th>NORDITROPIANS</th>
                <th>MIXTARDIANS</th>
                <th>VICTOZIANS</th>
                <th>NOVORAPIDIANS</th>
            </tr>
            <tr>
                <td><button class="btn btn-info row_button">Product/Diseases</button> </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novomixians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control levemirians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control norditropians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control mixtardians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control victozians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novorapidians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>

            <tr>
                <td><button class="btn btn-info row_button">Business Operations</button> </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novomixians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control levemirians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control norditropians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control mixtardians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control victozians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novorapidians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-info row_button">Novo Knowledge</button> </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novomixians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control levemirians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control norditropians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control mixtardians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control victozians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novorapidians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-info row_button">IQ</button> </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novomixians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control levemirians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control norditropians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control mixtardians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control victozians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novorapidians_score number" disabled readonly value="0">
                        <div class="input-group-btn">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button onclick="calculate_total();" class="btn btn-warning">Total</button>  </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novomixians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control levemirians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control norditropians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control mixtardians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control victozians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control novorapidians_total number" readonly value="0">
                    </div>
                </td>

            </tr>
        </table>

    </div>

</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>


<script>

    $(document).on( 'click','.row_button', function (e) {
        disabled_all_plus_minus();
        $(this).parent().parent().find('.add-amount').attr('disabled',false);
        $(this).parent().parent().find('.less-amount').attr('disabled',false);
        $(this).parent().parent().find('.input-group-btn').show();
    });

    $(document).on( 'click',".add-amount", function(e) {
        score = $(this).parent().parent().parent().find('.number').val();
        score = Number(score) +10;
        $(this).parent().parent().parent().find('.number').val(score);

        calculate_total();
    });

    $(document).on( 'click',".less-amount", function(e) {
        score = $(this).parent().parent().parent().find('.number').val();
        score = Number(score) -10;
        score = score < 0 ? 0 : score;
        $(this).parent().parent().parent().find('.number').val(score);

        calculate_total();
    });

    function disabled_all_plus_minus() {
        $('.add-amount, .less-amount').attr('disabled',true);
        $('.input-group-btn').hide();
    }
    disabled_all_plus_minus();
    function calculate_total() {
        // novomixians
        var sum = 0;
        $('.novomixians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".novomixians_total").val(sum);

        // levemirians
        var sum = 0;
        $('.levemirians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".levemirians_total").val(sum);

        // norditropians
        var sum = 0;
        $('.norditropians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".norditropians_total").val(sum);

        // mixtardians
        var sum = 0;
        $('.mixtardians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".mixtardians_total").val(sum);

        // victozians
        var sum = 0;
        $('.victozians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".victozians_total").val(sum);

        // novorapidians
        var sum = 0;
        $('.novorapidians_score').each(function(){ sum += parseFloat($(this).val()); });
        $(".novorapidians_total").val(sum);
    }

    $(document).on('change keydown', '.number', function(e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script>

</body>
</html>
