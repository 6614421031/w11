<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tree Detail
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow space-y-3">

            <p><strong>Code:</strong> {{ $tree->tree_code }}</p>
            <p><strong>Name:</strong> {{ $tree->name }}</p>
            <p><strong>Scientific:</strong> {{ $tree->scientific_name }}</p>
            <p><strong>Type:</strong> {{ $tree->type }}</p>
            <p><strong>Height:</strong> {{ $tree->height }}</p>
            <p><strong>Age:</strong> {{ $tree->age }}</p>
            <p><strong>Price:</strong> {{ number_format($tree->price,2) }}</p>
            <p><strong>Status:</strong> {{ $tree->status }}</p>
            <p><strong>Plant Date:</strong> {{ $tree->plant_date?->format('d/m/Y') }}</p>
            <p><strong>Location:</strong> {{ $tree->location }}</p>
            <p><strong>Soil Type:</strong> {{ $tree->soil_type }}</p>
            <p><strong>Fruit Tree:</strong> {{ $tree->is_fruit_tree ? 'Yes 🌳' : 'No' }}</p>
            <p><strong>Description:</strong> {{ $tree->description }}</p>

            <div class="mt-4 flex gap-4">
                <a href="{{ route('trees.edit',$tree->id) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded">
                    Edit
                </a>

                <a href="{{ route('trees.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Back
                </a>
            </div>

        </div>
    </div>
</x-app-layout>