import map from "../assets/images/map.png";
import sanggar1 from "../assets/images/sanggar1.png";
import sanggar2 from "../assets/images/sanggar2.png";

import { lazy } from "react";
import '../assets/css/style.css';

import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import { Pagination, Navigation } from 'swiper/modules';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLocationDot, faStar } from "@fortawesome/free-solid-svg-icons";

export const Home = () => {
  return (
    <div className="max-w-screen-default mx-auto">
      {/* Introduce Section */}

      <section className="py-16 px-4">
        <div className="text-center">
          <h2 className="font-bold text-2xl">Tari Lahbako</h2>
        </div>

        <div className="flex flex-wrap flex-col md:flex-row mt-14 items-center">
          <div className="flex-1">
            <img className="" src={map} alt="Map Kabupaten Jember" />
          </div>

          <div className="flex-1">
            <p className="text-justify font-hind text-lg">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, Lorem Ipsum is simply dummy text
              of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an
              unknown printer took a galley of type and scrambled it to make a
              type specimen book. It has survived not only five centuries, Lorem
              Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since
            </p>
          </div>
        </div>
      </section>

      <section className="py-16 px-4">
        <div className="flex flex-row gap-10">
          <div className="w-132">
            <h1 className="text-3xl font-bold">
              Sanggar Tari Di Kabupaten Jember
            </h1>

            <p className="mt-8 text-justify font-hind">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries,
            </p>
          </div>

          <Swiper
            slidesPerView={3}
            spaceBetween={150}
            pagination={{
              clickable: true,
            }}
            loop={true}
            navigation={true}
            modules={[Pagination, Navigation]}
            className="swiper-container"
          >
            <SwiperSlide>
              <div className="relative w-72 rounded-xl shadow-md flex flex-col items-center ">
                <img
                  src={sanggar1}
                  alt=""
                  loading={'lazy'}
                  className="w-full h-96 object-cover rounded-xl"
                />

                <div className="text-center absolute w-full pt-8">
                    <h3 className="text-white text-xl font-medium font-hind">Sanggar Rias Busana</h3>
                    <div className="text-yellow-300 mt-1 text-sm flex gap-1 justify-center">
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                    </div>
                </div>

                <div className="absolute bottom-0 px-6 py-2 rounded-xl bg-white opacity-50 shadow-xl mb-8">
                    <div className="flex items-center gap-2">
                        <div className="text-red-700 ">
                            <FontAwesomeIcon icon={faLocationDot} />
                        </div>

                        <div className="">
                            <p className="font-hind text-sm mb-0">Ambulu, Kec. Ambulu, 68172</p>
                        </div>
                    </div>
                </div>
              </div>
            </SwiperSlide>
            <SwiperSlide>
              <div className="relative w-72 rounded-xl shadow-md flex flex-col items-center">
                <img
                  src={sanggar2}
                  alt=""
                  loading={'lazy'}
                  className="w-full h-96 object-cover rounded-xl"
                />

                <div className="text-center absolute w-full pt-8">
                    <h3 className="text-white text-xl font-medium font-hind">Sanggar Kartika Budaya</h3>
                    <div className="text-yellow-300 mt-1 text-sm flex gap-1 justify-center">
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                    </div>
                </div>

                <div className="absolute bottom-0 px-6 py-2 rounded-xl bg-white opacity-50 shadow-xl mb-8">
                    <div className="flex items-center gap-2">
                        <div className="text-red-700 ">
                            <FontAwesomeIcon icon={faLocationDot} />
                        </div>

                        <div className="">
                            <p className="font-hind text-sm mb-0">Ambulu, Kec. Ambulu, 68172</p>
                        </div>
                    </div>
                </div>
              </div>
            </SwiperSlide>
            <SwiperSlide>
              <div className="relative w-72 rounded-xl shadow-md flex flex-col items-center">
                <img
                  src={sanggar2}
                  alt=""
                  loading={'lazy'}
                  className="w-full h-96 object-cover rounded-xl"
                />

<div className="text-center absolute w-full pt-8">
                    <h3 className="text-white text-xl font-medium font-hind">Sanggar Gelar Budaya</h3>
                    <div className="text-yellow-300 mt-1 text-sm flex gap-1 justify-center">
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                    </div>
                </div>

                <div className="absolute bottom-0 px-6 py-2 rounded-xl bg-white opacity-50 shadow-xl mb-8">
                    <div className="flex items-center gap-2">
                        <div className="text-red-700 ">
                            <FontAwesomeIcon icon={faLocationDot} />
                        </div>

                        <div className="">
                            <p className="font-hind text-sm mb-0">Sidomekar, Kec. Semboro, 68157</p>
                        </div>
                    </div>
                </div>
              </div>
            </SwiperSlide>
            <SwiperSlide>
              <div className="relative w-72 rounded-xl shadow-md flex flex-col items-center">
                <img
                  src={sanggar2}
                  alt=""
                  loading={'lazy'}
                  className="w-full h-96 object-cover rounded-xl"
                />

<div className="text-center absolute w-full pt-8">
                    <h3 className="text-white text-xl font-medium font-hind">Sanggar Gelar Budaya</h3>
                    <div className="text-yellow-300 mt-1 text-sm flex gap-1 justify-center">
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                    </div>
                </div>

                <div className="absolute bottom-0 px-6 py-2 rounded-xl bg-white opacity-50 shadow-xl mb-8">
                    <div className="flex items-center gap-2">
                        <div className="text-red-700 ">
                            <FontAwesomeIcon icon={faLocationDot} />
                        </div>

                        <div className="">
                            <p className="font-hind text-sm mb-0">Sidomekar, Kec. Semboro, 68157</p>
                        </div>
                    </div>
                </div>
              </div>
            </SwiperSlide>
            <SwiperSlide>
              <div className="relative w-72 rounded-xl shadow-md flex flex-col items-center">
                <img
                  src={sanggar2}
                  alt=""
                  loading={'lazy'}
                  className="w-full h-96 object-cover rounded-xl"
                />

<div className="text-center absolute w-full pt-8">
                    <h3 className="text-white text-xl font-medium font-hind">Sanggar Gelar Budaya</h3>
                    <div className="text-yellow-300 mt-1 text-sm flex gap-1 justify-center">
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                        <FontAwesomeIcon icon={faStar} />
                    </div>
                </div>

                <div className="absolute bottom-0 px-6 py-2 rounded-xl bg-white opacity-50 shadow-xl mb-8">
                    <div className="flex items-center gap-2">
                        <div className="text-red-700 ">
                            <FontAwesomeIcon icon={faLocationDot} />
                        </div>

                        <div className="">
                            <p className="font-hind text-sm mb-0">Sidomekar, Kec. Semboro, 68157</p>
                        </div>
                    </div>
                </div>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>
      </section>

      <section className="py-16 px-4">
          <div className="text-center">
            <h2 className="font-bold text-2xl">Tarian hasil Kolaborasi</h2>
          </div>

          <div className="mx-auto mt-14">
            <div className="grid grid-cols-5 gap-4">
              <div className="bg-white shadow-md rounded-lg p-4">
                <img src="image1.jpg" alt="Image 1" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white row-span-2 shadow-md rounded-lg p-4">
                <img src="image2.jpg" alt="Image 2" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white shadow-md rounded-lg p-4">
                <img src="image3.jpg" alt="Image 3" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white col-span-2 shadow-md rounded-lg p-4">
                <img src="image4.jpg" alt="Image 4" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white shadow-md rounded-lg p-4">
                <img src="image5.jpg" alt="Image 5" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white col-span-2 shadow-md rounded-lg p-4">
                <img src="image6.jpg" alt="Image 6" className="w-full h-full object-cover rounded-lg" />
              </div>
              <div className="bg-white shadow-md rounded-lg p-4">
                <img src="image7.jpg" alt="Image 7" className="w-full h-full object-cover rounded-lg" />
              </div>
            </div>
          </div>
      </section>

      <section className=""></section>
    </div>
  );
};
