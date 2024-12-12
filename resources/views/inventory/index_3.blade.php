@extends('layouts.app')

@section('title', 'Inventory Management')

@section('styles')
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
<link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link rel="stylesheet" href="{{ asset('css/inventory/inventory.css') }}">
@endsection

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <!-- Header Section -->
                <div class="flex flex-wrap justify-between gap-3 p-4">
                    <div class="flex min-w-72 flex-col gap-3">
                        <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight">Inventory management</p>
                        <p class="text-[#637588] text-sm font-normal leading-normal">Manage your inventory and stock levels</p>
                    </div>
                </div>

                <!-- Search Section -->
                <div class="px-4 py-3">
                    <label class="flex flex-col min-w-40 h-12 w-full">
                        <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                            <div class="text-[#637588] flex border-none bg-[#f0f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                </svg>
                            </div>
                            <input type="text" 
                                id="inventorySearch"
                                placeholder="Search for stock"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-full placeholder:text-[#637588] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                            />
                        </div>
                    </label>
                </div>

                <!-- Table Section -->
                <div class="px-4 py-3 @container">
                    <div class="flex overflow-hidden rounded-xl border border-[#dce0e5] bg-white">
                        <table class="flex-1" id="inventoryTable">
                            <thead>
                                <tr class="bg-white">
                                    <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Medicines Name</th>
                                    <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Type</th>
                                    <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Description</th>
                                    <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Status</th>
                                    <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Quantity</th>
                                    <th class="px-4 py-3 text-left text-[#111418] w-60 text-[#637588] text-sm font-medium leading-normal">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventories as $inventory)
                                <tr class="border-t border-t-[#dce0e5]">
                                    <td class="h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                                        {{ $inventory->medicine_name }}
                                    </td>
                                    <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                                        {{ $inventory->type }}
                                    </td>
                                    <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                                        {{ $inventory->description }}
                                    </td>
                                    <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                                        {{ $inventory->status }}
                                    </td>
                                    <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                                        {{ $inventory->quantity }}
                                    </td>
                                    <td class="h-[72px] px-4 py-2 w-60 text-[#637588] text-sm font-bold leading-normal tracking-[0.015em]">
                                        <a href="{{ route('inventory.show', $inventory->id) }}" class="text-[#378fe6] hover:text-[#2563eb]">View</a>
                                        <a href="{{ route('inventory.edit', $inventory->id) }}" class="ml-4 text-[#378fe6] hover:text-[#2563eb]">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Stock Button (Fixed Position) -->
<a href="{{ route('inventory.create') }}" 
   class="fixed bottom-8 right-8 flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#378fe6] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#2563eb] transition-colors">
    <span class="truncate">New entry</span>
</a>
@endsection

@section('scripts')
<script src="{{ asset('js/essentials/search.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        initializeSearch('inventoryTable', 'inventorySearch');
    });
</script>
@endsection