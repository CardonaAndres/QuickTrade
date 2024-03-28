<table class="">
    <tbody>
     <tr>
       <td >

         <div class="card item">
           
             <img  class="image" src="{{ asset('storage/'.$image) }}" alt="IMAGEN">

             <div class="card__content">
               <p class="card__title">{{ $name }}</p>
               <p class="card__description">Ubicación: {{ $location }}</p>
               <p class="card__description">Cantidad Disponible: {{ $quantity }} - {{$weight }}</p>
               <button class="card__button" >
                 <a href="{{ route('producer_detail.show',$id) }}">Ver más</a>
               </button>
               

             </div>

         </div>
       
       </td>
     
     </tr>
     
   </tbody>  
   
 </table>