<div class="w-3/4 space-y-0.5 has-[.stream:empty]:hidden">
    <div class="text-xs dark:text-gray-400">Bot</div>
    <div class="bg-slate-200 dark:bg-gray-700 rounded-xl text-slate-50 dark:text-gray-100 rounded-tl-none px-3 py-1.5 text-sm">
        <div wire:stream="stream-{{ $this->getId() }}">
            {!! $response !!}
        </div>
    </div>
</div>
