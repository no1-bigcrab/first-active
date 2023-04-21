import { createBrowserRouter } from "react-router-dom";
import Login from "./views/Login";
import Signup from "./views/Signup";
import GuestLayout from "./components/GuestLayout";
import User from "./views/User";
import NotFound from "./views/NotFound";
import Dashboard from "./views/Dashboard";
import DefaultLayout from "./components/DefaultLayout";

const router = createBrowserRouter([
    {
        path: "/",
        element: <DefaultLayout />,
        children: [
            {
                path: "/user",
                element: <User />
            },
             {
                path: "/dashboard",
                element: <Dashboard />
            }
        ]
    },
    {
        path: "/",
        element: <GuestLayout />,
        children: [
            {
                path: "/login",
                element: <Login />
            },
            {
                path: "/signup",
                element: <Signup />
            }
        ]
    },
    {
        path: "*",
        element: <NotFound />
    }
])

export default router;