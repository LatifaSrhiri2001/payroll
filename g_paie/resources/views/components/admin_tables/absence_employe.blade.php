<table class="w-full border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
          
          <th scope="col" class="px-6 py-3">
            CIN
          </th>
          <th scope="col" class="px-6 py-3">
             Date absence
          </th>
          <th scope="col" class="px-6 py-3">
             Nombre jours
          </th>
         
      </tr>
  </thead>
  <tbody>
     
  
          @foreach ($dernieresAbsences as $dernieresAbsence)
          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">
                 {{ $dernieresAbsence->cin }}
              </td>
              <td class="px-6 py-4">
                  <div class="flex items-center">
                      <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> 
                      {{ $dernieresAbsence->date_absence }}
                  </div>
              </td>
              <td class="px-6 py-4">
                  <div class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> 
                      {{ $dernieresAbsence->nombre_jours }}
                  </div>
              </td>
             
          </tr>
          @endforeach
      </tbody>
      

</table>