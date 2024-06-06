<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Update Profile Information -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

            <!-- Update Avatar -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('profile.updateAvatar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="avatar">Avatar:</label>
                        <input type="file" name="avatar" accept="image/*">
                        <button type="submit" class="btn btn-primary mt-2">Change Avatar</button>
                    </form>
                </div>
            </div>

            <!-- Link Accounts -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200">Link Accounts</h3>
                    <a href="{{ route('profile.linkAccount', 'facebook') }}" class="btn btn-secondary mt-2">Link Facebook</a>
                    <a href="{{ route('profile.linkAccount', 'google') }}" class="btn btn-secondary mt-2">Link Google</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

