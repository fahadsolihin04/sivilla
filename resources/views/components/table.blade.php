@props([
'header' => '',
])

{{-- <div class="container p-2 mx-auto sm:p-4">
    <div class="overflow-x-auto">
        <table class="min-w-full text-xs bg-white">
            <colgroup>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col class="w-24">
            </colgroup>
            <thead class="dark:bg-gray-300 bg-slate-200">
                <tr class="text-left">
                    {{ $header }}
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>

<script>
    document.querySelectorAll('th').forEach(el => el.classList.add("px-6", "py-3", "text-left", "text-xs", "font-medium", "textgray-500", "uppercase"));
    document.querySelectorAll('td').forEach(el => el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-gray-800", "dark:text-gray-200"));
</script> --}}

<div class="flex flex-col">
    <div class=-m-1.5 overflow-x-auto>
        <div class=p-1.5 min-w-full inline-block align-middle>
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200
                dark:divide-gray-700">
                <thead>
                    <tr>
                        {{ $header }}
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('th').forEach(el=>el.classList.add("px-6", "py-3", "text-left", "text-xs", "font-medium", "text-gray-500", "uppercase"));
    document.querySelectorAll('td').forEach(el=>el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-gray-800", "dark:text-gray-200"));
</script>
