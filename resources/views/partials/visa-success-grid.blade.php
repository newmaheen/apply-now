@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Landscape Card Grid: 3 columns -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($visaSuccesses as $visa)
            <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group">
                <!-- Landscape Image Box -->
                <div class="relative bg-slate-900 aspect-[16/10] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 right-3 bg-emerald-600 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow-lg">Approved ✓</span>
                </div>
                
                <!-- Details -->
                <div class="p-6 flex-1 flex flex-col justify-between bg-white">
                    <div>
                        <h3 class="font-bold text-slate-900 text-base mb-3 leading-snug">{{ $visa->title ?? 'Indian Visa Approved' }}</h3>
                        <div class="space-y-1.5 text-xs text-slate-600 mb-4 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                            @if($visa->route)
                                <div class="flex justify-between items-center">
                                    <span class="text-slate-400">অনুমোদিত রুট:</span>
                                    <strong class="text-slate-800">{{ $visa->route }}</strong>
                                </div>
                            @endif
                            @if($visa->issue_date)
                                <div class="flex justify-between items-center">
                                    <span class="text-slate-400">ইস্যুর তারিখ:</span>
                                    <span class="font-medium text-slate-700">{{ $visa->issue_date->format('d M, Y') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                       class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-emerald-600 text-white text-xs font-bold py-2.5 px-4 rounded-xl transition-all">
                        <span>এই বিষয়ে ইনকোয়ারি করুন</span> &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-12">
            {{ $visaSuccesses->links() }}
        </div>
    @endif
@else
    <div class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-200">
        <p class="text-slate-500">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।</p>
    </div>
@endif