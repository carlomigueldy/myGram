@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcgy1-1.fna.fbcdn.net/vp/92cdbb3ad62eca0329fd61465638c020/5D7EEFD7/t51.2885-19/s150x150/32224988_146248836231743_3684409524183105536_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>783</strong> posts</div>
                <div class="pr-5"><strong>990k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" alt="Image may contain: one or more people and indoor" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fcgy1-1.fna.fbcdn.net/vp/eac8917b5b2e968581cd7d3e2352490c/5D907D56/t51.2885-15/e35/s150x150/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 150w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/49b9739643a0c4a98e11a3cc48646847/5D93471C/t51.2885-15/e35/s240x240/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 240w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/a4c5c295c5cfe39be2ecf99817ce68d2/5D955EA6/t51.2885-15/e35/s320x320/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 320w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/783a6737a79de340e44abcfc2620bf87/5D7B2AFC/t51.2885-15/e35/s480x480/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 480w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/f2564167920474f9b125937c1370a9b8/5D9E74F1/t51.2885-15/sh0.08/e35/s640x640/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 640w" src="https://instagram.fcgy1-1.fna.fbcdn.net/vp/f2564167920474f9b125937c1370a9b8/5D9E74F1/t51.2885-15/sh0.08/e35/s640x640/60872445_116137712944459_1038968549320824814_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <img class="w-100" alt="No photo description available." class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fcgy1-1.fna.fbcdn.net/vp/d12019da4bcf783255170561ed868260/5D8572B7/t51.2885-15/e35/c0.135.1080.1080a/s150x150/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 150w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/c9dc27327e74e8aa34826f55053a1287/5D9AD5FD/t51.2885-15/e35/c0.135.1080.1080a/s240x240/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 240w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/24ffac3cc42812ab3069ab1baecda9df/5D851A47/t51.2885-15/e35/c0.135.1080.1080a/s320x320/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 320w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/3e8de623e89c32ce2a3f6848dcbb64fd/5D9AB51D/t51.2885-15/e35/c0.135.1080.1080a/s480x480/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 480w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/0f0f5ca49c276779e445707b4e3371f7/5D9BA77C/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 640w" src="https://instagram.fcgy1-1.fna.fbcdn.net/vp/0f0f5ca49c276779e445707b4e3371f7/5D9BA77C/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/57611904_286609435548785_2401449832972493441_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <img class="w-100" alt="Image may contain: screen" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fcgy1-1.fna.fbcdn.net/vp/8c097c0d47c7446e6e11a44303ed5f70/5D93EE86/t51.2885-15/e35/s150x150/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 150w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/c856d82a602f0ae79735dda893cd9708/5D841B33/t51.2885-15/e35/s240x240/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 240w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/0a16ecdd972ba4a2cadc678ba5118ccb/5D96F28B/t51.2885-15/e35/s320x320/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 320w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/d74982665ecbeaef74b5e0dc67fc22f5/5D7DBED7/t51.2885-15/e35/s480x480/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 480w,https://instagram.fcgy1-1.fna.fbcdn.net/vp/924b942a5515d0a77eeb6d892da8455f/5D99A567/t51.2885-15/sh0.08/e35/s640x640/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net 640w" src="https://instagram.fcgy1-1.fna.fbcdn.net/vp/924b942a5515d0a77eeb6d892da8455f/5D99A567/t51.2885-15/sh0.08/e35/s640x640/59692350_420252732131597_179521775734151677_n.jpg?_nc_ht=instagram.fcgy1-1.fna.fbcdn.net" style="object-fit: cover;">
        </div>
    </div>
</div>
@endsection
