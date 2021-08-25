    <section >
        <div class="max-w-5xl mx-auto">
            <div >

            @if (session()->has('message'))
                                <p style="color:#d6478f;" class="text-xl text-gray-600 md:pr-16">
                                    {{ session('message') }}
                                </p>
                                @elseif(session()->has('message2'))
                                <p style="color:#d6478f;" class="text-xl text-gray-600 md:pr-16">
                                    {{ session('message2') }}
                                </p>
                            @endif
                <div class="w-full mt-16 md:mt-0">
                    <div class="relative z-10 h-auto p-4 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        @auth
                        <center>   <p class="font-medium text-blue-500 uppercase">
                               Évaluez ce produit                             </p> </center>  



                           
                            @if($hideForm != true)
                                <form wire:submit.prevent="rate()">
                                    <div class="block max-w-3xl px-1 py-2 mx-auto">
                                        <div class="flex space-x-1 rating">
                                            <label for="star1">
                                                <input hidden wire:model="rating" type="radio" id="star1" name="rating" value="1" />
                                                <svg   class="cursor-pointer block w-8 h-8 @if($rating >= 1 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star2">
                                                <input hidden wire:model="rating" type="radio" id="star2" name="rating" value="2" />
                                                <svg   class="cursor-pointer block w-8 h-8 @if($rating >= 2 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star3">
                                                <input hidden wire:model="rating" type="radio" id="star3" name="rating" value="3" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 3 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star4">
                                                <input hidden wire:model="rating" type="radio" id="star4" name="rating" value="4" />
                                                <svg  class="cursor-pointer block w-8 h-8 @if($rating >= 4 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star5">
                                                <input hidden wire:model="rating" type="radio" id="star5" name="rating" value="5" />
                                                <svg   class="cursor-pointer block w-8 h-8 @if($rating >= 5 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                        </div>
                                        <br>
                                        <div class="my-5">
                                            @error('comment')
                                                <p class="mt-1 text-red-500">{{ $message }}</p>
                                            @enderror
                                            <textarea wire:model.lazy="comment" name="description" class="block w-full px-4 py-3 border border-2 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Ecrivez un Commentaire.."></textarea>
                                        </div>
                                    </div>
                                    <div class="block">
                                       <center> <button type="submit"  class="button button--primary" >Envoyer</button></center>
                                       @auth
                                            @if($currentId)
                                            <center>                  <button type="submit"   class="button " wire:click.prevent="delete({{ $currentId }})" class="text-sm cursor-pointer"><b style="color:#26734d;">Annuler</b></button> </center>
                                            @endif
                                        @endauth
                                    </div>
                                </form>
                            @endif
                        @else
                            <div>
                                <div class="mb-8 text-center text-gray-600">
                                Vous devez vous connecter pour pouvoir évaluer le produit !                                </div>
                                <a href="/login"
                                    class="block px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100" 
                                >Connecter</a>
                            </div>
                        @endauth
                    </div>
                </div>
    
            </div>
        </div>
        </section>

       
                <h2 class="productView-brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
            <br>    Avis Clients 


                </h2>


                <div itemscope itemtype="http://schema.org/Product">
        <div class="productView"  data-event-type="product" data-entity-id="80" data-name="Orbit Terrarium - Large" data-product-category="Bath, Garden, Online Only Sales, Kitchen, Utility, Tools &amp; Hardware, Outdoor Living, Automotive, Pets &amp; Livestock, Electronics, Outdoor Living/Fishing &amp; Boating, Automotive/Brakes &amp; Hardware, Automotive/Interior Accessories, Automotive/Body &amp; Trim, Outdoor Living/Hunting/Lighting &amp; Electrical, Automotive/Charging &amp; Starting, Automotive/Wheels &amp; Tires, Automotive/Fuses &amp; Sensors, Automotive/External Engine, Automotive/Suspension, Automotive/Steering, Automotive/Collision, Automotive/Trucks &amp; Towing, Automotive/Fluids &amp; Chemicals, Automotive/Body &amp; Trim/Bumpers, Automotive/Body &amp; Trim/Cables &amp; Straps, Automotive/Body &amp; Trim/Door Parts, Automotive/Body &amp; Trim/Hood &amp; Grill, Automotive/Brakes &amp; Hardware/Brake Pads, Automotive/Brakes &amp; Hardware/Brake Pads/Rotors, Automotive/Brakes &amp; Hardware/Bleeders, Automotive/Brakes &amp; Hardware/Wheel Cylinders, Automotive/Brakes &amp; Hardware/Spring Kits, Automotive/Charging &amp; Starting/Battery Cables, Automotive/Charging &amp; Starting/Batteries, Automotive/Charging &amp; Starting/Solenoids, Automotive/Charging &amp; Starting/Alternators, Outdoor Living/Fishing &amp; Boating/Headlights, Automotive/Collision/Body Panels, Automotive/Collision/Windshield, Automotive/Collision/Paint Matching, Automotive/Collision/Moudling, Automotive/External Engine/Fuel Pump, Automotive/External Engine/Carburetors, Automotive/External Engine/PCV Valves, Automotive/External Engine/Valve Covers, Automotive/Fluids &amp; Chemicals/Motor Oil, Automotive/Fluids &amp; Chemicals/Grease, Automotive/Fluids &amp; Chemicals/Transmission Fluid, Automotive/Fluids &amp; Chemicals/Engine Coolant" data-product-brand="Braking Better" data-product-price="109" data-product-variant="single-product-option">


                @forelse ($comments as $comment)

               <div class="flex col-span-1">
                    <div class="relative px-4 mb-16 leading-6 text-left">
                        
                <h10  class="font-medium text-blue-500 uppercase"  style="color:#d6478f;">
               <?php $users= DB::select('select * from users ',[1] );?>
                @foreach($users as $user)
                                @if( $user->id == $comment->user_id)
                                    {{  $user->name }}
                                    @endif
                                    @endforeach                                     
                                </h10>
                              {{  $comment->created_at->format('Y.m.d') }}   
                             
                              @php $a=$comment->rating @endphp
                              <strong>    @for($i = 1; $i <= $a ; $i++)
                                    ⭐

                        @endfor 
                                 </strong>
                                 <br>  


                         
                                {{ $comment->comment }}
                                
                           
                    </div>
                </div>
                
                                @empty
                <div class="flex col-span-1">
                    <div class="relative px-4 mb-16 leading-6 text-left">
                        <div class="box-border text-lg font-medium text-gray-600">
Pas d'avis.                        </div>
                    </div>
                </div>
                @endforelse




</div>

