<div>
    @include('templates.'. $template .'.landing.header')

    <div class="flex flex-row w-full h-screen pt-16">
        {{--project list--}}
        <div class="bg-gray-200 w-1/5 h-full z-10">
            @include('templates.'. $template .'.dashboard.project-list', ['projects' => $projects])
        </div>
        {{--end project list--}}

        {{--detail project--}}
        <div class="w-4/5 flex flex-col justify-center z-20 p-8">
            <div class="">
                <ul class="w-full grid grid-cols-4 text-center gap-4 py-8">
                    <li class="text-xl font-bold">Total Views</li>
                    <li class="text-xl font-bold">Today Views</li>
                    <li class="text-xl font-bold">Total Signup</li>
                    <li class="text-xl font-bold">Today Signup</li>
                    <li>{{ $p->views }}</li>
                    <li>{{ $p->today }}</li>
                    <li>{{ count($p->detail) }}</li>
                    <li>{{ $count }}</li>
                </ul>
            </div>
            <div class="">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400 border border-b-slate-200">
                    <tr>
                        <td scope="col" class="px-6 py-3">Email</td>
                        <td scope="col" class="px-6 py-3">Full Name</td>
                        <td scope="col" class="px-6 py-3">Your Input</td>
                        <td scope="col" class="px-6 py-3">Created at</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($p->detail as $detail)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{ $detail->email }}</td>
                            <td class="px-6 py-4">{{ $detail->name }}</td>
                            <td class="px-6 py-4">{{ $detail->new }}</td>
                            <td class="px-6 py-4">{{ $detail->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{--end detail project--}}
    </div>
</div>
