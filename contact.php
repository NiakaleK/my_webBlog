<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food'n Solites - Contact</title>
    <?php require_once("portion/head.php"); ?>
</head>
<body>
    <?php require_once("sql/sql_connectDtb.php"); ?>
    <?php require_once("portion/header.php"); ?>
    
    <section>
        <div class="container">
            <form class="well col-sm-12 col-md-12">
                <div class="row">
                    <h2>Contact</h2>
                    <div id="contact" class="col-sm-4 col-md-4">
                        <label>Prenom</label>
                        <input class="form-control" type="text">
                        <label>Nom</label>
                        <input class="form-control" type="text">
                        <label>Email</label>
                        <input class="form-control" type="text"> <label>Objet</label>
                        <select class="col-sm-3 col-md-3 form-control" id="subject" name="subject">
                            <option selected="" value="none">Choisir:</option>
                            <option value="service">General</option>
                            <option value="suggestions">Suggestions</option>
                            <option value="demand">Demande</option>
                        </select>
                    </div>
            
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <label>Message</label> 
                            <textarea class="col-sm-3 col-md-3 form-control" id="message" name="message" rows="10"></textarea>
                            <button class="btn btn-primary pull-right" type="submit">Envoyer</button>
                        </div>
                    </div>            
                </div>
            </form>
        </div>
    </section>

    <?php require_once("portion/footer.php"); ?>
</body>
</html>