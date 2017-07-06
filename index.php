<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mastermind Novo Nordisk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<style>
    body {
        font-family: Verdana;!important;
        font-size: 14px;}
    .borderless td, .borderless th {
        border: none;
        border-top:none;
    }

    .novomixians_score, .novomixians_total,
    .novomixians_score[disabled] , .novomixians_score[readonly],
    .novomixians_total[disabled] , .novomixians_total[readonly]{
        color: #ffffff;
        background-color: #17365D; !important;
        border-color: #17365D;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }

    .levemirians_score, .levemirians_total,
    .levemirians_score[disabled] , .levemirians_score[readonly],
    .levemirians_total[disabled] , .levemirians_total[readonly]{
        color: #ffffff;
        background-color: #35CB98; !important;
        border-color: #35CB98;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }

    .norditropians_score, .norditropians_total,
    .norditropians_score[disabled] , .norditropians_score[readonly],
    .norditropians_total[disabled] , .norditropians_total[readonly]{
        color: #ffffff;
        background-color: #2C91AC; !important;
        border-color: #2C91AC;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }

    .mixtardians_score, .mixtardians_total,
    .mixtardians_score[disabled] , .mixtardians_score[readonly],
    .mixtardians_total[disabled] , .mixtardians_total[readonly]{
        color: #ffffff;
        background-color: #984807; !important;
        border-color: #984807;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }

    .victozians_score, .victozians_total,
    .victozians_score[disabled] , .victozians_score[readonly],
    .victozians_total[disabled] , .victozians_total[readonly]{
        color: #ffffff;
        background-color: #990433; !important;
        border-color: #990433;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }

    .novorapidians_score, .novorapidians_total,
    .novorapidians_score[disabled] , .novorapidians_score[readonly],
    .novorapidians_total[disabled] , .novorapidians_total[readonly]{
        color: #ffffff;
        background-color: #E36C0A; !important;
        border-color: #E36C0A;
        width: 50px;
        text-align: center;
        font-size: 18px;
    }


</style>
<body>

<header class="container-fluid text-center">
    <img src="header2.jpg">
</header>

<div class="content container">
    <div class="row">

        <table class="table borderless" >
            <tr>
                <th></th>
                <th style="color: #17365D">NOVOMIXIANS</th>
                <th style="color: #35CB98">LEVEMIRIANS</th>
                <th style="color: #2C91AC">NORDITROPIANS</th>
                <th style="color: #984807">MIXTARDIANS</th>
                <th style="color: #990433">VICTOZIANS</th>
                <th style="color: #E36C0A">NOVORAPIDIANS</th>
            </tr>
            <tr>
                <td><button class="btn btn-info row_button">PRODUCT/DISEASES</button> </td>
                <td>
                    <div >
                        <input type="text" class="form-control novomixians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control levemirians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control norditropians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control mixtardians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control victozians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control novorapidians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>

            <tr>
                <td><button class="btn btn-info row_button">BUSINESS OPERATIONS</button> </td>
                <td>
                    <div >
                        <input type="text" class="form-control novomixians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control levemirians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control norditropians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control mixtardians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control victozians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control novorapidians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-info row_button">NOVO KNOWLEDGE</button> </td>
                <td>
                    <div >
                        <input type="text" class="form-control novomixians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control levemirians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control norditropians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control mixtardians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control victozians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control novorapidians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-info row_button">IQ</button> </td>
                <td>
                    <div >
                        <input type="text" class="form-control novomixians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control levemirians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control norditropians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control mixtardians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control victozians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok " aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control novorapidians_score number pull-left" disabled readonly value="0">
                        <div class="pull-left">&nbsp;</div>
                        <div class="btn-group">
                            <button class="btn btn-success add-amount"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                            <button class="btn btn-danger less-amount"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td><button onclick="calculate_total();" class="btn btn-warning">TOTAL</button>  </td>
                <td>
                    <div >
                        <input type="text" class="form-control novomixians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control levemirians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control norditropians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control mixtardians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control victozians_total number" readonly value="0">
                    </div>
                </td>
                <td>
                    <div >
                        <input type="text" class="form-control novorapidians_total number" readonly value="0">
                    </div>
                </td>

            </tr>
        </table>

    </div>

</div>

<footer class="container-fluid text-center">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/xavv4gSbZqc" frameborder="0" allowfullscreen></iframe>
    <img src="footer1.jpg">


</footer>


<script>

    $(document).on( 'click','.row_button', function (e) {
        disabled_all_plus_minus();
        $(this).parent().parent().find('.add-amount').attr('disabled',false);
        $(this).parent().parent().find('.less-amount').attr('disabled',false);
        $(this).parent().parent().find('.btn-group').show();
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
        $('.btn-group').hide();
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
