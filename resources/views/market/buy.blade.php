@extends('index')
@section('title', 'سوق السيارات ׀ اشتري')
@section('buy-active', 'active')


@push('css')
<link rel="stylesheet" href="{{url('css/selection.css')}}" />

@endpush

@section('content')

@include('components.quickSearch')

<!-- Start Brnads -->
<div class="container mx-auto px-2 mt-8">
    <div class="flex flex-wrap">
        @include('components.brands')
    </div> 
</div>
</div>
<!-- End Brnads -->

<div class="container mx-auto px-2 mt-8">
    <p class="header">أحدث الإعلانات</p>
    <!--  
        @include('components.filter')
    -->
</div>
@include('components.carsCardsGrid')

<!-- Start Pagenation -->
@include('components.pagenation')

<!-- End Pagenation -->

<div class="shape flex justify-center w-full overflow-x-hidden">
    <div class="all" style="transform: rotate(-6deg)">
        <p class="text-center mb-4">عايز تبيع</p><a class="btn yellow" href="{{route('sell')}}">اعلن عن عربيتك</a>
    </div>
</div>

@include('components.news')

@endsection

@push('js')
<script src="{{url('js/libs/siema.min.js')}}"></script>
<script src="{{url('js/modules/selectbox/single.js')}}"></script>
<script>
    window.addEventListener('load', function() {
        const siemas = document.querySelectorAll('.siema');
        for (const siema of siemas) {
            new Siema({
                selector: siema,
                easing: 'ease-out',
                perPage: 1,
                startIndex: -1,
                loop: true,
                rtl: true,
            })
        };
    })
        let brand_parent = document.querySelector('.replacement.w-full.singleSelect[data-select-name="brand"]').firstElementChild;
    var config = {
        attributes: true,
        childList: true,
        subtree: true,
        characterData: true
    };
    var observer = new MutationObserver(function() {
        let value = brand_parent.getAttribute('val');

        var formData = new FormData();
        formData.append('brand_id', value);

        axios.post('ajax_model', formData).then(res => {
            let model_parent = document.querySelector('.replacement.w-full.singleSelect[data-select-name="model"]').lastElementChild,
                ul = model_parent.firstElementChild;

            res.data.forEach(model => {
                ul.innerHTML = '';
                let option = document.createElement("option");
                let li = document.createElement("li");

                li.setAttribute('data-val', model.id);
                li.innerHTML = `<span class="span">${model.name}</span><div class="checker"><i class="fa far-faacebook"></i></div>`;
                li.classList.add("replacement-ul--li");

                option.setAttribute('value', model.id);
                option.innerText = model.name;

                document.querySelector('select#model').appendChild(option);
                ul.appendChild(li);
            });

            let all = [...ul.children];
            all.forEach(li => {
                li.onclick = function() {
                    let parent = document.querySelector('.replacement.w-full.singleSelect[data-select-name="model"]'),
                        clickable = parent.querySelectorAll('.replacement-ul--li');

                    let el = this;
                    let text = this.firstChild.innerText;
                    let val = this.getAttribute('data-val');
                    let allOptions = [...document.querySelector('select#model').children];
                    allOptions.forEach(option => {

                        console.log("option.value ", option.value, "val ", val);

                    })

                    let exactOpt = allOptions.find(option => {
                        return option.value == val;
                    });

                    let input = el.parentElement.parentElement.previousSibling;

                    let checker_checked = parent.querySelectorAll('.replacement-ul--li .checker.checked');
                    if (checker_checked) {
                        checker_checked.forEach(n => {
                            n.classList.remove("checked")
                        });

                        clickable.forEach(function(li) {
                            li.classList.remove("checked")
                        });
                    };

                    /* Add Checked class to checker to inform the user he has checked the button and take the value of it or remove it from the value array */
                    if (!el.lastElementChild.classList.contains("checked")) {
                        allOptions.forEach(opt => {
                            opt.selected = '';
                        });
                        exactOpt.selected = 'selected';
                        el.lastElementChild.classList.add("checked");
                        li.classList.add("checked");
                        value = val;
                        value = val;
                        optText = text;

                        // Set the placeholder
                        console.log(input);
                        input.innerText = text;
                        parent.scrollTop = 0;
                        parent.classList.remove("replacement-opened");
                    }

                }
            })

        }).catch(err => {
            console.log(err);
        })
    });
    observer.observe(brand_parent, config);
</script>

@endpush