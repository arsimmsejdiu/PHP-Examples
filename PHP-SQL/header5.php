<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Exercises 5
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      5. Répartition par Etat et le nombre d’enregistrement par état (croissant).
    </p>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      SELECT country_code, COUNT(*) as country from users group by country_code
    </p>
  </div>
</div>