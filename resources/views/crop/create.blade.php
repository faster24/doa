<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Crops') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24">
    <form method="POST" action="{{ route('crop.create') }}">
        @csrf
      <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
            Name
            </label>
            <input name="name" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3
            px-4 mb-3" id="name" type="text" placeholder="Rice">
            <div>
            @error('name')
              <span class="text-red-500 text-xs italic">
                Please fill out this field.
              </span>
            @enderror
            </div>
          </div>
          <div class="md:w-1/2 px-3">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
            Category
            </label>
            <select name="category_id" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-4
             px-4 pr-8 mb-3 rounded" id="category">
                <option value="1">Abuja</option>
                <option value="2">Enugu</option>
                <option value="3">Lagos</option>
            </select>
          </div>
        </div>
        <div class="-m-3 md:flex mb-3">
          <div class="md:w-full px-3">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
            Description
            </label>
            <textarea name="description" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
             id="description" placeholder="Description">
            </textarea>
          </div>
        </div>
            @error('description')
              <span class="text-red-500 text-xs italic">
                Please fill out this field.
              </span>
            @enderror
        <div class="-mx-3 md:flex mt-2">
          <div class="md:w-full px-3 flex justify-end">
          <x-button>Submit</x-button>
          </div>
        </div>
      </div>
    </form>
  </div>
        </div>
    </div>
</x-app-layout>
