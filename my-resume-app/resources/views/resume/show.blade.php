<div class="resume-section">
       <h2>Experience</h2>
       <ul class="experience-list">
           @foreach ($resume->experiences as $experience)
               <li>
                   <h3>{{ $experience->title }}</h3>
                   <p>{{ $experience->company }}</p>
                   <p>{{ $experience->start_date }} - {{ $experience->end_date }}</p>
               </li>
           @endforeach
       </ul>
   </div>