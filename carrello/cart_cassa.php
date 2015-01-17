<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title align-right">Totale&emsp;</h2>
        </div>
        <div class="panel-body">
            <p>
                <h4>Hotel Splendid, Venezia</h4>
                <hr>
                <h4>Tour in gondola in Canal Grande</h4>
                <hr>
                <h4>Prima Materia - Punta della Dogana</h4>
                <hr>
            </p>
            <h3 class="align-right">247,00 €</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Metodo di pagamento</h2>
        </div>
        <div class="panel-body">
            <form action="">
                <fieldset>
                    <input type="radio" name="metodo" value="mastercard">&emsp;
                    <img src="/img/MasterCard_Logo.svg.png" class="logo-cart" alt="MasterCard">
                    <br>
                    <input type="radio" name="metodo" value="paypal">&emsp;
                    <img src="/img/Paypal_logo.jpg" class="logo-cart" alt="PayPal">
                </fieldset>
            </form>

            <div class="alert alert-warning" role="alert" <?php if ($_SESSION['user'] == null) { echo ''; } else { echo 'hidden="true"'; } ?>>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Warning:</span>
                Attenzione!! Devi accedere per poter continuare con l'acquisto!
                <br>
                <br>
                <form method="post" action="/user/login.php" class="text-center">
                    <button type="submit" class="btn btn-warning" name="TIPO" value="1" >Accedi</button>
                </form>
            </div>

            <form method="post" action="index.php" class="text-center" <?php if ($_SESSION['user'] == null) { echo 'hidden="true"'; } else { echo ''; } ?>>
                <button type="submit" class="btn btn-primary" name="TIPO" value="3">&emsp;&emsp;Paga&emsp;&emsp;</button>
            </form>

        </div>
    </div>
</div>


<form action="../offerte">
    <button type="submit" class="btn input-small">Torna allo shopping</button>
</form>