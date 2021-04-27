<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Exercises 7
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      7. Nombre de femme et d’homme.
    </p>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      SELECT count(*) as male from users where gender = 'male'
    </p>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      SELECT count(*) as female from users where gender = 'female'
    </p>
  </div>
</div>