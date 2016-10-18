<?php
/**
*  Theme Custom Form to Admin Custom Exemple
*  Author: Vinícius Marcili
*  Description: Exemple page
*/

/*
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script>
  jQuery(function() {
    jQuery( "#accordion" ).accordion({ collapsible: true});
    jQuery( "#accordion2" ).accordion({ collapsible: true, active: false});
    jQuery('#form_set').submit(function(){
      if($('#form_set .form-control').val() == ''){
        alert('Por favor preencha todos os campos');
        return false;
      }
    });
  });
</script>

<style type="text/css">
  input[type='text'].form-control {
    width: 100%;
  }
  #form_set{
    width: 98%;
  }
  p{
    margin: 10px 0 0;
  }
  .ui-accordion .ui-accordion-content{
    padding: 10px;
  }
  .ui-accordion-header{
    background-color: #0073AA;
    background-image: none;
    color: #fff;
    border: none;
  }
  .button-submit{
    background-color: #0073AA;
    float:right;
    border-radius: 3px;
    border: none;
    color:#fff;
    margin-top: 10px;
    width: 140px;
    height: 40px;
    font-weight: 700;
  }
  .width{
    width: 100%;
    display: block;
    min-height: 30px;
  }
  .width p{
    font-size: 12px;
    font-weight: 700;
  }
</style>

<form class="admin-wrap admin-main" id="form_set" class="form-control"  required="required" name="adm-main-form" method="post" action="">
  <div class="container">
    <h3 class="title_config">Dados Gerais</h3>
  </div>
  <div id="accordion">
    <h3>Redes Sociais</h3>
    <div>
          <p>Facebook</p>
          <input type="text" class="form-control"  required="required" name="facebook_unidade" value="<?php echo $facebook_unidade; ?>" /><br />

          <p>Instagram</p>
          <input type="text" class="form-control"  required="required" name="instagram_unidade" value="<?php echo $instagram_unidade; ?>" /><br />

          <p>Twitter</p>
          <input type="text" class="form-control"  required="required" name="twitter_unidade" value="<?php echo $twitter_unidade; ?>" /><br />

          <p>Linkedin</p>
          <input type="text" class="form-control"  required="required" name="linkedin_unidade" value="<?php echo $linkedin_unidade; ?>" /><br />

          <p>Google Plus</p>
          <input type="text" class="form-control"  required="required" name="google_plus_unidade" value="<?php echo $google_plus_unidade; ?>" /><br />

          <p>YouTube</p>
          <input type="text" class="form-control"  required="required" name="youtube_unidade" value="<?php echo $youtube_unidade; ?>" /><br />

          <p>RSS</p>
          <input type="text" class="form-control"  required="required" name="rss" value="<?php echo $rss; ?>" /><br />
    </div>

  </div>

  <div id="accordion2">
    <h3>Endereço</h3>
    <div>
          <p>Endereço</p>
          <input type="text" class="form-control"  required="required" name="endereco" value="<?php echo $endereco; ?>" /><br />

          <p>Link Endereço</p>
          <input type="text" class="form-control"  required="required" name="link_endereco" value="<?php echo $link_endereco; ?>" /><br />

          <p>E-mail</p>
          <input type="text" class="form-control"  required="required" name="email" value="<?php echo $email; ?>" /><br />

          <p>Telefone 1</p>
          <input type="text" class="form-control"  required="required" name="tel1" value="<?php echo $tel1; ?>" /><br />

          <p>Telefone 2</p>
          <input type="text" class="form-control"  required="required" name="tel2" value="<?php echo $tel2; ?>" /><br />

    </div>

  </div>

  <div class="width">
    <p> Todos os campos são obrigatórios, caso não possua coloque # </p>
   <input type="submit" class="form-control button-submit"  required="required" name="save_options" value="Salvar" />
</div>
  </form> <!-- .admin-wrap -->
*/
?>
