import { BrowserRouter, Route, Routes } from "react-router-dom";

export const App = () => {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<h1>hello</h1>} />
                <Route path="/about" element={<h1>about</h1>} />
            </Routes>
        </BrowserRouter>
    );
};
