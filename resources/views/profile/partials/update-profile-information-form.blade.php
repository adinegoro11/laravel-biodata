<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="applied_position" :value="__('Posisi Yang Dilamar')" />
            <x-text-input id="applied_position" name="applied_position" type="text" class="mt-1 block w-full" :value="old('applied_position', $user->applied_position)" required autofocus autocomplete="applied_position" />
            <x-input-error class="mt-2" :messages="$errors->get('applied_position')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="id_card" :value="__('No. KTP')" />
            <x-text-input id="id_card" name="id_card" type="text" class="mt-1 block w-full" :value="old('id_card', $user->id_card)" required autocomplete="id_card" />
            <x-input-error class="mt-2" :messages="$errors->get('id_card')" />
        </div>

        <div>
            <x-input-label for="place_of_birth" :value="__('Tempat Lahir')" />
            <x-text-input id="place_of_birth" name="place_of_birth" type="text" class="mt-1 block w-full" :value="old('place_of_birth', $user->place_of_birth)" required autocomplete="place_of_birth" />
            <x-input-error class="mt-2" :messages="$errors->get('place_of_birth')" />
        </div>

        <div>
            <x-input-label for="date_of_birth" :value="__('Tanggal Lahir')" />
            <x-text-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" :value="old('date_of_birth', $user->date_of_birth)" required autocomplete="date_of_birth" />
            <x-input-error class="mt-2" :messages="$errors->get('date_of_birth')" />
        </div>

        <div>
            <x-input-label for="gender" :value="__('Jenis Kelamin')" />
            <select class="bg-gray-50 border text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="gender" id="gender">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ old('gender', $user->gender) == 'L' ? 'selected' : null }}>Laki-Laki</option>
                <option value="P" {{ old('gender', $user->gender) == 'P' ? 'selected' : null }}>Perempuan</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>

        <div>
            <x-input-label for="religion" :value="__('Agama')" />
            <select class="bg-gray-50 border text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="religion" id="religion" required>
                <option value="">-- Pilih Agama --</option>
                <option value="islam" {{ old('religion', $user->religion) == 'islam' ? 'selected' : null }}>Islam</option>
                <option value="kristen" {{ old('religion', $user->religion) == 'kristen' ? 'selected' : null }}>Kristen</option>
                <option value="khatolik" {{ old('religion', $user->religion) == 'khatolik' ? 'selected' : null }}>Khatolik</option>
                <option value="hindu" {{ old('religion', $user->religion) == 'hindu' ? 'selected' : null }}>Hindu</option>
                <option value="budha" {{ old('religion', $user->religion) == 'budha' ? 'selected' : null }}>Budha</option>
                <option value="lainnya" {{ old('religion', $user->religion) == 'lainnya' ? 'selected' : null }}>Lainnya</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('religion')" />
        </div>

        <div>
            <x-input-label for="blood_group" :value="__('Golongan Darah')" />
            <x-text-input id="blood_group" name="blood_group" type="text" class="mt-1 block w-full" :value="old('blood_group', $user->blood_group)" required autocomplete="blood_group" />
            <x-input-error class="mt-2" :messages="$errors->get('blood_group')" />
        </div>

        <div>
            <x-input-label for="marital_status" :value="__('Status')" />
            <x-text-input id="marital_status" name="marital_status" type="text" class="mt-1 block w-full" :value="old('marital_status', $user->marital_status)" required autocomplete="marital_status" />
            <x-input-error class="mt-2" :messages="$errors->get('marital_status')" />
        </div>

        <div>
            <x-input-label for="address_origin" :value="__('Alamat KTP')" />
            <textarea id="address_origin" name="address_origin" rows="4" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat KTP">{{ old('address_origin', $user->address_origin) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('address_origin')" />
        </div>

        <div>
            <x-input-label for="address_now" :value="__('Alamat Tinggal')" />
            <textarea id="address_now" name="address_now" rows="4" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat Tinggal">{{ old('address_now', $user->address_now) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('address_now')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div>
            <x-input-label for="phone_number" :value="__('No.Telp')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" required autocomplete="phone_number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <div>
            <x-input-label for="related_person" :value="__('Orang Terdekat Yang Dapat Dihubungi')" />
            <x-text-input id="related_person" name="related_person" type="text" class="mt-1 block w-full" :value="old('related_person', $user->related_person)" required autocomplete="related_person" />
            <x-input-error class="mt-2" :messages="$errors->get('related_person')" />
        </div>

        <div>
            <x-input-label for="willing_travel" :value="__('Bersedia Ditempatkan di Seluruh Kantor Perusahaan')" />
            <select class="bg-gray-50 border text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="willing_travel" id="willing_travel" required>
                <option value="">-- Pilih --</option>
                <option value="Ya" {{ old('willing_travel', $user->willing_travel) == 'Ya' ? 'selected' : null }}>Ya</option>
                <option value="Tidak" {{ old('willing_travel', $user->willing_travel) == 'Tidak' ? 'selected' : null }}>Tidak</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('willing_travel')" />
        </div>

        <div>
            <x-input-label for="expected_salary" :value="__('Penghasilan yang Diharapkan')" />
            <x-text-input id="expected_salary" name="expected_salary" type="number" class="mt-1 block w-full" :value="old('expected_salary', $user->expected_salary)" required autocomplete="expected_salary" />
            <x-input-error class="mt-2" :messages="$errors->get('expected_salary')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>