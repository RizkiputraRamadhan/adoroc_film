<section class="py-6 sm:py-12 bg-gray-100 text-gray-800">
    <div class="container p-6 mx-auto space-y-8">
        <div id="alat" class="space-y-2 ">
            <h2 class="text-2xl font-bold">SELAMAT DATANG DI ADOROC LAYAR
                EQUIPMENT FILM</h2>
            <p class="font-serif text-sm text-gray-600">
                Kami hadir untuk memenuhi kebutuhan anda <br> menyediakan kebutuhan <b>FILM </b> yang berkualitas.</p>
        </div>
        <div  role="tablist"
            class="tabs tabs-boxed border w-full text-center mx-auto overflow-x-auto overflow-hidden no-scrollbar hide-scrollbar sm:text-xs">
            <a role="tab" id="click-0"  class="tab btn btn-sm btn-info" onclick="showData('0', 'all')">All</a>
            @foreach ($category as $row)
                <a role="tab" id="click-{{ $row->id }}" class="tab btn btn-sm "
                    onclick="showData('{{ $row->id }}', '{{ $row->name }}')">{{ $row->name }}</a>
            @endforeach
        </div>

        <div class="container mx-auto">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($datas as $row)
                    <a href="/detail/{{ $row->id }}" class="bg-white p-4 rounded-lg shadow-md">
                        <div class="avatar">
                            <div class="rounded">
                                <img src="{{ asset('storage/' . $row->{'img-1'}) }}"
                                    class="transition-transform transform hover:scale-125" />
                            </div>
                        </div>
                        <h2 class="text-xl text-center font-bold mb-2">{{ $row->nama }}</h2>
                        <span id="idCategories" class="hidden">{{ $row->categories_id }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
