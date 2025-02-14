<div id="register_modal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 p-4 w-full md:inset-0 h-modal md:h-full"
  style="z-index: 99999;">
  <div class="relative w-full max-w-md h-full md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <button type="button"
        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
        data-modal-toggle="register_modal">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <div class="py-6 px-6 lg:px-8">
        <h3 class="mb-4 text-xl text-center font-medium text-gray-600 ">DAFTAR SEKARANG</h3>
        <form class="space-y-6" action="{{ Route("user.regis") }}" method="POST">
          @csrf
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
            @if($errors->has('username'))
            <div class="w-full bg-red-400 text-white p-1 text-center text-sm rounded-md mb-3"><span>{{ $errors->first('username') }}</span></div>
            @endif
            <input type="text" name="username" id="username"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
              placeholder="ex:user123">
          </div>
          <div>
            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 ">Full Name</label>
            @if($errors->has('name'))
            <div class="w-full bg-red-400 text-white p-1 text-sm text-center rounded-md mb-3"><span>{{ $errors->first('name') }}</span></div>
            @endif
            <input type="text" name="name" id="fullname"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
              placeholder="Masukkan Nama Asli">
          </div>
          <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
            @if($errors->has('address'))
            <div class="w-full bg-red-400 text-white p-1 text-sm text-center rounded-md mb-3"><span>{{ $errors->first('address') }}</span></div>
            @endif
            <input type="text" name="address" id="address"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400" placeholder="Masukkan Alamat Lengkap">
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
            @if($errors->has('email'))
            <div class="w-full bg-red-400 text-white p-1 text-sm text-center rounded-md mb-3"><span>{{ $errors->first('email') }}</span></div>
            @endif
            <input type="email" name="email" id="email"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
              placeholder="name@company.com">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">
              Password</label>
            @if($errors->has('password'))
            <div class="w-full bg-red-400 text-white p-1 text-sm text-center rounded-md mb-3"><span>{{ $errors->first('password') }}</span></div>
            @endif
              <input type="password" name="password" id="password" placeholder="••••••••"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 ">
          </div>
          <div class="flex justify-center">
            <button type="submit" id="btnSubmit"
              class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">DAFTAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>