import { Outlet } from "react-router-dom";
import hero from '../assets/images/hero1.png';
import { useEffect } from "react";
import '../assets/css/style.css';

const HomeSkin = () => {

  useEffect(() => {
    const iframe = document.getElementById("youtube-video");
    const autoplaySrc = iframe.src + "&autoplay=1&mute=1&modestbranding=1&controls=0&loop=1";
    iframe.src = autoplaySrc;
  }, []);

  return (
    <>
    <div className="h-screen relative -z-10">
      <nav className="bg-transparent">
        <div className="max-w-screen-default flex flex-wrap items-center justify-between mx-auto p-4">
          <a
            href="https://flowbite.com/"
            className="flex items-center space-x-3 rtl:space-x-reverse"
          >
            <img
              src="https://flowbite.com/docs/images/logo.svg"
              className="h-8"
              alt="Flowbite Logo"
            />
            <span className="self-center text-2xl font-semibold whitespace-nowrap text-white">
              JAD
            </span>
          </a>
          <button
            data-collapse-toggle="navbar-default"
            type="button"
            className="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <span className="sr-only">Open main menu</span>
            <svg
              className="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
          <div className="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul className="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
              <li>
                <a
                  href="#"
                  className="block py-2 px-3 text-white rounded md:bg-transparent md:p-0 dark:text-white"
                  aria-current="page"
                >
                  Home
                </a>
              </li>
              <li>
                <a
                  href="#"
                  className="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 "
                >
                  About
                </a>
              </li>
              <li>
                <a
                  href="#"
                  className="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 "
                >
                  Services
                </a>
              </li>
              <li>
                <a
                  href="#"
                  className="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 "
                >
                  Pricing
                </a>
              </li>
              <li>
                <a
                  href="#"
                  className="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 "
                >
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section className="h-full w-full absolute top-0 -z-10">
        <div className="w-full h-full -mt-14">
          <iframe id="youtube-video" className="w-full h-full" src="https://www.youtube.com/embed/ilFg9XpDX8c?autoplay=1&loop=1&modestbranding=1&controls=0&showinfo=0&autohide=1&playlist=ilFg9XpDX8c" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerPolicy="strict-origin-when-cross-origin" allowFullScreen></iframe>
        </div>

          <div className="-mt-14 absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>

          <div className=" absolute top-44 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center flex flex-col justify-center">
            <h1 className="text-4xl font-extrabold">TARIAN OTENTIK JEMBER</h1>
          </div>

          <div className="flex justify-evenly absolute bottom-14 left-1/2 transform -translate-x-1/2 w-full text-center">
            <img className="xl:w-120 w-96" src={hero} alt="" loading="lazy"/>
            <h2 className="text-3xl font-bold text-white">Tari Lahbako</h2>
          </div>

          <div className="absolute w-full bottom-9 z-10 flex justify-center">
            <div className="font-medium bg-white flex gap-20 py-2 px-8 rounded-2xl shadow-[0_4px_6px_0px_rgb(0,0,0,0.4)]">
                <p>Tari Lahbako</p>
                <p>Tari Semarak Pandhalungan</p>
                <p>Tari Padumbe</p>
                <p>Tari Parvvateswara</p>
                <p>Tari Kuda Kencak</p>
            </div>
          </div>
        </section>
    </div>

      <Outlet />
    </>
  );
};

export default HomeSkin;
