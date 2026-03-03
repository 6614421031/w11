<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tree Management
        </h2>
        <div class="mb-4 text-right">
    <a href="{{ route('trees.create') }}"
       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
        + Add New Tree
    </a>
</div>
    </x-slot>
    

    <div class="py-8">
        <div class="w-11/12 mx-auto overflow-x-auto">

            <table class="table-auto border-collapse border border-green-900 w-full text-center text-sm">
                <thead class="bg-green-200">
                    <tr>
                        <th class="border border-green-900 px-2 py-2">ID</th>
                        <th class="border border-green-900 px-2 py-2">Code</th>
                        <th class="border border-green-900 px-2 py-2">Name</th>
                        <th class="border border-green-900 px-2 py-2">Scientific</th>
                        <th class="border border-green-900 px-2 py-2">Type</th>
                        <th class="border border-green-900 px-2 py-2">Height</th>
                        <th class="border border-green-900 px-2 py-2">Age</th>
                        <th class="border border-green-900 px-2 py-2">Price</th>
                        <th class="border border-green-900 px-2 py-2">Status</th>
                        <th class="border border-green-900 px-2 py-2">Plant Date</th>
                        <th class="border border-green-900 px-2 py-2">Location</th>
                        <th class="border border-green-900 px-2 py-2">Soil</th>
                        <th class="border border-green-900 px-2 py-2">Fruit</th>
                         <th class="border border-green-900 px-2 py-2">Description</th>
                        <th class="border border-green-900 px-2 py-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($trees as $item)
                    <tr class="hover:bg-green-50">
                        <td class="border border-green-900 px-2 py-2">{{ $item->id }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->tree_code }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->name }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->scientific_name }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->type }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->height }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->age }}</td>
                        <td class="border border-green-900 px-2 py-2">
                            {{ number_format($item->price,2) }}
                        </td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->status }}</td>
                        <td class="border border-green-900 px-2 py-2">
                            {{ $item->plant_date ? $item->plant_date->format('d/m/Y') : '-' }}
                        </td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->location }}</td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->soil_type }}</td>
                        <td class="border border-green-900 px-2 py-2">
                            {{ $item->is_fruit_tree ? 'Yes 🌳' : 'No' }}

                        </td>
                        <td class="border border-green-900 px-2 py-2">{{ $item->description }}</td>

                        <td class="border border-green-900 px-2 py-2">
                            <div class="flex flex-col gap-2 items-center">
                                <a href="{{ route('trees.show',$item->id) }}"
   class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-xs w-20 text-center">
    View
</a>

                                <a href="{{ route('trees.edit',$item->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs w-20">
                                    Edit
                                </a>

                                <form action="{{ route('trees.destroy',$item->id) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Delete this tree?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs w-20">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>