@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>


<header class="max-w-lg mx-auto mt-5">
   <a href="#">
      <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
   </a>
</header>
 
<section class="mt-10">

   <div class=" ">
     <form action="" class="g-1 text-center mb-3">
         <div class="col">
            <input type="text" class="mb-2 mt-1 w-60 px-3 py-2 bg-white border-slate-300 rounded-full text-sm shadow-sm placeholder-slate-500 focus:outline-none
             focus:border-sky-500 focus:ring-2 focus:ring-sky-500" name="q" value="{{ $q }}" placeholder="Search here...">
         </div>
         <div class="col">
            <button class="btn btn-success">Search</button>
         </div>
     </form>
      <table class="w-100 text-sm text-left text-gray-500">
         <thead class="text-xs text gray-700 uppercase bg-gray-50">
            <tr>
               <th scope="col" class="py-3 px-6">
                  
               </th>
               <th scope="col" class="py-3 px-6">
                  First Name
               </th>
               <th scope="col" class="py-3 px-6">
                  Last Name
               </th>
               <th scope="col" class="py-3 px-6">
                  Email
               </th>
               <th scope="col" class="py-3 px-6">
                  Age
               </th>
               <th scope="col" class="py-3 px-6">
                  Gender
               </th>
               <th scope="col" class="py-3 px-6">
                  Action
               </th>
            </tr>
         </thead>

         <tbody>
            @foreach ($students as $student)
            <tr class="bg-gray-800 border-b text-white">
               @if($student -> gender == 'Male')
            <td>
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#263238" d="M35.4 41L34 27 14 27 12.6 41 6 47 42 47z"/><path fill="#455a64" d="M36,17c0,0-0.3-9-12-9s-12,9-12,9c0,6.6,2,17.3,2.8,20.8c0.2,0.7,0.6,1.4,1.2,1.8l5.5,3.9 c0.3,0.2,0.7,0.4,1.2,0.4h2.7c0.4,0,0.8-0.1,1.2-0.4l5.5-3.9c0.6-0.4,1-1.1,1.2-1.8C34,34.3,36,23.6,36,17z"/><path fill="#607d8b" d="M24,33v-7.3L22,25l-1.7,6.9C21.7,32.5,23.2,33,24,33z"/><path fill="#37474f" d="M33 23l-7 2 1.7 6.9 1.8 9.6 2.5-1.8c.6-.4 1-1.1 1.2-1.8.4-2 1.3-6.4 1.9-11l0 0c.1-.8.2-1.6.3-2.4 0 0 0 0 0 0 .1-.8.2-1.6.3-2.4L33 23zM15 23l7 2-1.7 6.9-1.8 9.6L16 39.7c-.6-.4-1-1.1-1.2-1.8-.4-2-1.3-6.4-1.9-11l0 0c-.1-.8-.2-1.6-.3-2.4 0 0 0 0 0 0-.1-.8-.2-1.6-.3-2.4L15 23z"/><path fill="#fff" d="M26 25l7-2c0 0-2 3-4 3S26 25 26 25zM22 25l-7-2c0 0 2 3 4 3S22 25 22 25z"/><path fill="#455a64" d="M12 17c0-7 2-16 2-16l3 9-4 7H12zM36 17c0-7-2-16-2-16l-3 9 4 7H36z"/><path fill="#607d8b" d="M17.7,12c0,0,2.3-2,6.3-2s6.3,2,6.3,2l0.8-2.4C29.4,8.6,27.1,8,24,8s-5.4,0.6-7.1,1.6L17.7,12z"/><path fill="#ffb74d" d="M16,30c0,0,6,3,8,3s8-3,8-3l-2,11.2l-3.5,2.4c-0.3,0.3-0.8,0.4-1.2,0.4h-2.7c-0.4,0-0.9-0.1-1.2-0.4 L18,41.1L16,30z"/><path fill="#fb8c00" d="M20.4,37.7l-0.9-1.8c0.1,0,1.8-0.9,4.4-0.9c2.6,0,4.4,0.9,4.4,0.9l-0.9,1.8c0,0-1.4-0.7-3.6-0.7 C21.9,37,20.5,37.7,20.4,37.7z"/></svg></p>
           </td>
              @else
             <td>
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#424242" d="M33.024 6.083C30.405 3.793 27.905 3 24 3s-6.405.793-9.024 3.083C13 4 11 2 11 2s0 3 0 16c0 11 3 15 3.135 15.003 0 0 4.96-.003 9.865-.003s9.865.003 9.865.003C34 33 37 29 37 18c0-13 0-16 0-16S35 4 33.024 6.083zM17 35v8.49c.31.15.62.28.93.39C19.82 44.61 21.86 45 24 45s4.18-.39 6.07-1.12c.31-.11.62-.24.93-.39V35h-7H17z"/><path fill="#ffb74d" d="M23,22.99L14,16v16.468c0,0.333,0.076,0.667,0.237,0.958c1.258,2.278,3.092,3.945,4.831,5.123 c2.89,1.958,6.711,1.939,9.556-0.083c1.632-1.16,3.449-2.779,5.012-4.966C33.877,33.165,34,32.754,34,32.34V16l-9,6.99H23z"/><path fill="#616161" d="M22 22H26V24H22z"/><path fill="#e1bee7" d="M36 21c0-5.203-1.053-5.426-1.053-5.426-6.818 0-9.947 5.429-9.947 7.661S28.154 28 31.095 28 36 25.162 36 21zM12 21c0-5.203 1.053-5.426 1.053-5.426 6.818 0 9.947 5.429 9.947 7.661S19.846 28 16.905 28 12 25.162 12 21z"/><path fill="#616161" d="M35.931 21.116c0-5.203-.983-5.542-.983-5.542S36.965 13.923 38 12c0 0 0 2 0 8 0 4.976-4.731 7.408-4.731 7.408C34.936 26.392 35.931 24.132 35.931 21.116zM12.069 21.116c0-5.203.983-5.542.983-5.542S11.035 13.923 10 12c0 0 0 2 0 8 0 4.976 4.731 7.408 4.731 7.408C13.064 26.392 12.069 24.132 12.069 21.116z"/><path fill="#880e4f" d="M25,32c-0.75,0-1,1-1,1s-0.042-1-1-1s-3,1-3,1s2.2,2,4,2s4-2,4-2S25.75,32,25,32z"/><path fill="#f3e5f5" d="M27 24c0 0 .634-3 3.171-3C32.396 21 33 22.333 33 22.333S32.073 24 30.463 24C28.854 24 28.979 24 27 24zM21 24c0 0-.634-3-3.171-3C15.604 21 15 22.333 15 22.333S15.927 24 17.537 24 19.021 24 21 24z"/><g><path fill="#90caf9" d="M29.5 21A1.5 1.5 0 1 0 29.5 24 1.5 1.5 0 1 0 29.5 21zM18.5 21A1.5 1.5 0 1 0 18.5 24 1.5 1.5 0 1 0 18.5 21z"/></g><g><path fill="#263238" d="M29.5 22A.5.5 0 1 0 29.5 23 .5.5 0 1 0 29.5 22zM18.5 22A.5.5 0 1 0 18.5 23 .5.5 0 1 0 18.5 22z"/></g><g><path fill="#424242" d="M22 23c-2.7-1.25-4.139-4-6.114-4s-2.886 3.062-2.886 3.062S14 20.578 16 20.578C17.8 20.578 19.75 23 22 23zM26 23c2.7-1.25 4.025-4 6-4s2.999 3.062 2.999 3.062S34 20.578 32 20.578C30.2 20.578 28.25 23 26 23z"/></g></svg></p>
              </td>
                 @endif 
               <td class="py-4 px-6">
                  {{ $student-> first_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> last_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> email }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> age }}
               </td>   
               <td class="py-4 px-6">
                  {{ $student-> gender }}
               </td>  
               <td class="py-4 px-6">
                  <a href="/student/{{$student->id}}" class="bg-sky-600 text-white px-4 py-1 rounded">view</a>
               </td>            
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="mx-auto max-w-lg pt-6 p-4">
         {{$students->links()}}
      </div>
   </div>
</section>

@include('partials.footer')

