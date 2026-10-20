@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Visa Success Grid: Mobile-এ 2 columns (2টি করে কার্ড), Desktop-এ 3 columns -->
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-8">
        @foreach($visaSuccesses as $visa)
            <div class="bg-white rounded-xl sm:rounded-3xl border border-slate-100 shadow-md sm:shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group">
                <!-- Landscape Image Box -->
                <div class="relative bg-slate-900 aspect-[16/10] w-full flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-emerald-600 text-white text-[9px] sm:text-[11px] font-bold px-2 sm:px-3 py-0.5 sm:py-1 rounded-full shadow-lg">Approved ✓</span>
                </div>
                
                <!-- Details -->
                <div class="p-2.5 sm:p-6 flex-1 flex flex-col justify-between bg-white">
                    <div>
                        <h3 class="font-bold text-slate-900 text-xs sm:text-base mb-2 sm:mb-3 leading-snug line-clamp-2">{{ $visa->title ?? 'Indian Visa Approved' }}</h3>
                        <div class="space-y-1 text-[10px] sm:text-xs text-slate-600 mb-3 sm:mb-4 bg-slate-50 p-2 sm:p-3 rounded-lg sm:rounded-2xl border border-slate-100">
                            @if($visa->route)
                                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-0.5 sm:gap-2">
                                    <span class="text-slate-400 shrink-0">অনুমোদিত রুট:</span>
                                    <strong class="text-slate-800 sm:text-right truncate">{{ $visa->route }}</strong>
                                </div>
                            @endif
                            @if($visa->issue_date)
                                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                                    <span class="text-slate-400">তারিখ:</span>
                                    <span class="font-medium text-slate-700">{{ $visa->issue_date->format('d M, Y') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                       class="w-full flex items-center justify-center gap-1 bg-slate-900 hover:bg-emerald-600 text-white text-[10px] sm:text-xs font-bold py-2 sm:py-2.5 px-2 sm:px-4 rounded-lg sm:rounded-xl transition-all shadow-sm">
                        <span>ইনকোয়ারি করুন</span> &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-8 sm:mt-12 flex justify-center overflow-x-auto py-2">
            <div class="inline-flex rounded-xl shadow-sm bg-white border border-slate-200 p-1.5 gap-1 pagination-links">
                {{ $visaSuccesses->onEachSide(1)->links('pagination::simple-tailwind') }}
            </div>
        </div>
    @endif
@else
    <div class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-200">
        <p class="text-slate-500 text-sm">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।</p>
    </div>
@endif