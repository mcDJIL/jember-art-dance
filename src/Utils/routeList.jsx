import { createBrowserRouter } from "react-router-dom";
import GuestSkin from "../Skins/guestSkin";
import HomeSkin from "../Skins/homeSkin";
import { Home } from "../Pages/home";

const router = createBrowserRouter([
    {
        path: '/',
        element: <HomeSkin/>,
        children: [
            {
                path: '/',
                element: <Home />
            },
        ]
    }
]);

export default router;