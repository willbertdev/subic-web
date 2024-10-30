@php
    $faqs = [
        [
            'title' => 'General Information',
            'questions' => [
                'What are the city’s operating hours?',
                'How can I contact my city council representative?',
                'Where can I find city meeting schedules?'
            ],
            'answers' => [
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
            ]
        ],
        [
            'title' => 'Public Services',
            'questions' => [
                'How do I report a pothole or road damage?',
                'Where can I access city parks and recreational facilities?',
                'What services are available for waste disposal and recycling?'
            ],
            'answers' => [
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
            ]
        ],
        [
            'title' => 'Permits and Licenses',
            'questions' => [
                'How do I apply for a building permit?',
                'What is needed to obtain a business license?',
                'How can I get a permit for a special event?'
            ],
            'answers' => [
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
                "These questions can vary based on the specific city and its services, but they generally reflect residents' needs and concerns regarding local governance and community services.",
            ]
        ],
    ];
@endphp

<div class="card basic-data-table">
    <div class="card-header p-0 border-0">
        <div class="responsive-padding-40-150 bg-light-100">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-7">
                    <h4 class="mb-20">Frequently asked questions.</h4>
                    <p class="mb-0 text-secondary-light max-w-634-px text-xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard du text ever since the 1500s, when an unkn</p>
                </div>
                <div class="col-xl-5 d-xl-block d-none">
                    <img src="{{ asset('assets/images/faq-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="card-body bg-base responsive-padding-40-150">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="active-text-tab nav flex-column nav-pills bg-base shadow py-0 px-24 radius-12 border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($faqs as $faq)
                        <button class="nav-link text-secondary-light fw-semibold text-xl px-0 py-16 border-bottom {{ $loop->first ? 'active' : '' }}" id="v-pills-{{ Str::replace(' ', '-', Str::lower($faq['title'])) }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ Str::replace(' ', '-', Str::lower($faq['title'])) }}" type="button" role="tab" aria-controls="v-pills-{{ Str::replace(' ', '-', Str::lower($faq['title'])) }}" aria-selected="true">{{ $faq['title'] }}</button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($faqs as $faq)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="v-pills-{{ Str::replace(' ', '-', Str::lower($faq['title'])) }}" role="tabpanel" aria-labelledby="v-pills-{{ Str::replace(' ', '-', Str::lower($faq['title'])) }}-tab" tabindex="0">
                            <div class="accordion" id="accordionExample">
                                @foreach ($faq['questions'] as $i => $question)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-primary-light text-xl" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                {{ $question }}
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $faq['answers'][$i] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>