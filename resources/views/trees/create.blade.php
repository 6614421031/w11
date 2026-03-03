<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Tree
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

            <form action="{{ route('trees.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-2 gap-4">

                    <input type="text" name="tree_code" placeholder="Tree Code"
                        value="{{ old('tree_code') }}"
                        class="border p-2 rounded">

                    <input type="text" name="name" placeholder="Name"
                        value="{{ old('name') }}"
                        class="border p-2 rounded">

                    <input type="text" name="scientific_name" placeholder="Scientific Name"
                        value="{{ old('scientific_name') }}"
                        class="border p-2 rounded">

                    <input type="text" name="type" placeholder="Type"
                        value="{{ old('type') }}"
                        class="border p-2 rounded">

                    <input type="number" name="height" placeholder="Height"
                        value="{{ old('height') }}"
                        class="border p-2 rounded">

                    <input type="number" name="age" placeholder="Age"
                        value="{{ old('age') }}"
                        class="border p-2 rounded">

                    <input type="number" step="0.01" name="price" placeholder="Price"
                        value="{{ old('price') }}"
                        class="border p-2 rounded">

                    <input type="text" name="status" placeholder="Status"
                        value="{{ old('status') }}"
                        class="border p-2 rounded">

                    <input type="date" name="plant_date"
                        value="{{ old('plant_date') }}"
                        class="border p-2 rounded">

                    <input type="text" name="location" placeholder="Location"
                        value="{{ old('location') }}"
                        class="border p-2 rounded">

                    <input type="text" name="soil_type" placeholder="Soil Type"
                        value="{{ old('soil_type') }}"
                        class="border p-2 rounded">

                    <select name="is_fruit_tree" class="border p-2 rounded">
                        <option value="1">Fruit Tree</option>
                        <option value="0">Not Fruit Tree</option>
                    </select>

                </div>

                <textarea name="description" placeholder="Description"
                    class="border p-2 rounded w-full mt-4">{{ old('description') }}</textarea>

                <div class="mt-6 flex gap-4">
                    <button class="bg-green-500 text-white px-4 py-2 rounded">
                        Save
                    </button>

                    <a href="{{ route('trees.index') }}"
                       class="bg-gray-500 text-white px-4 py-2 rounded">
                        Back
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>