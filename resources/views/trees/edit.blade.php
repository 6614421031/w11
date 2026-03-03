<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tree
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

            <form action="{{ route('trees.update',$tree->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">

                    <input type="text" name="tree_code"
                        value="{{ old('tree_code',$tree->tree_code) }}"
                        class="border p-2 rounded">

                    <input type="text" name="name"
                        value="{{ old('name',$tree->name) }}"
                        class="border p-2 rounded">

                    <input type="text" name="scientific_name"
                        value="{{ old('scientific_name',$tree->scientific_name) }}"
                        class="border p-2 rounded">

                    <input type="text" name="type"
                        value="{{ old('type',$tree->type) }}"
                        class="border p-2 rounded">

                    <input type="number" name="height"
                        value="{{ old('height',$tree->height) }}"
                        class="border p-2 rounded">

                    <input type="number" name="age"
                        value="{{ old('age',$tree->age) }}"
                        class="border p-2 rounded">

                    <input type="number" step="0.01" name="price"
                        value="{{ old('price',$tree->price) }}"
                        class="border p-2 rounded">

                    <input type="text" name="status"
                        value="{{ old('status',$tree->status) }}"
                        class="border p-2 rounded">

                    <input type="date" name="plant_date"
                        value="{{ old('plant_date',$tree->plant_date?->format('Y-m-d')) }}"
                        class="border p-2 rounded">

                    <input type="text" name="location"
                        value="{{ old('location',$tree->location) }}"
                        class="border p-2 rounded">

                    <input type="text" name="soil_type"
                        value="{{ old('soil_type',$tree->soil_type) }}"
                        class="border p-2 rounded">

                    <select name="is_fruit_tree" class="border p-2 rounded">
                        <option value="1" {{ $tree->is_fruit_tree ? 'selected' : '' }}>Fruit Tree</option>
                        <option value="0" {{ !$tree->is_fruit_tree ? 'selected' : '' }}>Not Fruit Tree</option>
                    </select>

                </div>

                <textarea name="description"
                    class="border p-2 rounded w-full mt-4">{{ old('description',$tree->description) }}</textarea>

                <div class="mt-6 flex gap-4">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded">
                        Update
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