import { Head } from "@inertiajs/react";
import { Link } from "@inertiajs/react";

export default function Home() {
    return (
        <div>
            <Head title="Home" />
            <div className="flex flex-col items-center justify-center h-screen bg-gray-100 text-center">
                <h1 className="text-4xl font-bold mb-4">
                    Welcome to the Authenticator
                </h1>
                <p className="mb-6 text-lg text-gray-700">
                    Enhance your security with two-factor authentication.
                </p>
                <div className="flex flex-col space-y-4">
                    <Link
                        href={route("login")}
                        className="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg transition duration-300 hover:bg-blue-500"
                    >
                        Login
                    </Link>
                </div>
            </div>
        </div>
    );
}
