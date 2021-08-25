@include('session_client.header')
<br>
<br>
<div class="container">
            <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" class="breadcrumb-label" itemprop="item"><span itemprop="name">Acceuil</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope >
                <meta itemprop="item" content="">
                <a href="/contact-us" class="breadcrumb-label" itemprop="item">
                <span class="breadcrumb-label" itemprop="name" style="color:#d6478f;" ><u>Contact</u></span></a>
            <meta itemprop="position" content="2" />
        </li>

        </ul>
        <br>
        <h5 class="page-heading" style="color:#d6478f;"> N'hésitez pas à prendre contact avec notre équipe
 <h1  style="color:#1a7022"
>CONTACTER MAREKTI BIO</h1><h5>
<!------ Include the above in your HEAD tag ---------->    

                    <div class="login-row" style="background-image: url('images/cc2.png');"  >
                    
            <form  class="login-form form" method="post" action="{{ route('contactus.store') }}">
            @if (session('status'))
                        <div  style="color:#1a7022" class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
			    {{ csrf_field() }}
              
              
              

                <div class="form-field" class="form-field {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="form-label" for="login_email"   style="color:#1a7022"> Votre Nom:  <a style="color:#ff6666;" > * </a></label>                        
                                                  
                          
                          
                            <input placeholder="Nom" class="form-input" type="text" name="name" class="form-control"  required />
				 @if ($errors->has('name'))
										<span  style="color:#ff9999" class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
				 @endif

</div>




<div class="form-field" class="form-field  {{ $errors->has('tel') ? ' has-error' : '' }}">
                <label class="form-label" for="login_email"  style="color:#1a7022">Numéro de téléphone:  <a style="color:#ff6666;" > * </a></label>
                      
                            <input placeholder="téléphone"  class="form-input" type="text" name="tel" class="form-control"   required />
				 @if ($errors->has('tel'))
										<span  style="color:#ff9999" class="help-block">
											<strong>{{ $errors->first('tel') }}</strong>
										</span>
				 @endif
</div>


<div class="form-field" class="form-field {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="form-label" for="login_email"  style="color:#1a7022">Votre Adresse E-mail:  <a style="color:#ff6666;" > * </a></label>
                            <input placeholder="E-mail" class="form-input" type="email" name="email" class="form-control"   required />
							 @if ($errors->has('email'))
										<span  style="color:#1a7022" class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
							 @endif
                        </div>



                        <div class="form-field" class="form-field {{ $errors->has('subject') ? ' has-error' : '' }}">
                <label class="form-label" for="login_email"  style="color:#1a7022">Sujet :  <a style="color:#ff6666;" > * </a></label>
                            <input  placeholder="Sujet" class="form-input" type="text" name="subject" class="form-control"   />
							@if ($errors->has('subject'))
										<span  style="color:#ff9999" class="help-block">
											<strong>{{ $errors->first('subject') }}</strong>
										</span>
							 @endif
                        </div>

                        
                        
            <div class="form-field"  class="form-field {{ $errors->has('message') ? ' has-error' : '' }}">
                <label class="form-label" for="login_email" style="color:#1a7022">Votre message :  <a style="color:#ff6666;" > * </a></label>
                            <textarea placeholder="Votre message" name="message" class="form-control"  style="width: 100%; height: 150px;" required></textarea>
			     @if ($errors->has('message'))
				<span  style="color:#ff9999" class="help-block">
				<strong>{{ $errors->first('message') }}</strong>
				</span>
			    @endif
                        </div>
                    
                
<div class="form-actions"  >
    <input type="submit" class="button button--primary" value="Envoyer">
</div>
</div>
        

           
           

            </form>
</div>



<center>                 
<p   style="font-family:Georgia;">Nos conseillers se tiennent à votre disposition, vous pouvez les contacter par téléphone en composant le 23792583,
ou via notre formulaire de contact ..</p>
</center>

</div>
   







    <div class="banners" data-banner-location="top">
<div class="banner" data-event-type="promotion" data-entity-id="1" data-name="Home Page Top" data-position="top" data-banner-id="Home Page Top">
    <div data-event-type="promotion-click">
        <p>TOUS VOS SECRETS DE BEAUTÉ
SUR  <strong><a href="/">   MREKTI BIO</a></strong></p>
    </div>
</div>
</div>





    @include('session_client.footer')
