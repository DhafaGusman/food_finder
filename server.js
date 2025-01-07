import express from "express";
import axios from "axios";
import cors from "cors";

const app = express();
const PORT = 3000;

// Enable CORS
app.use(cors());

app.get("/restaurants", async (req, res) => {
    try {
        const city = req.query.city || "Jakarta"; // Jika tidak ada query city, default ke Jakarta

        // Ambil data restoran dari API Laravel
        const response = await axios.get(
            `http://localhost/restaurants?city=${city}`
        );

        // Kirim data yang diterima ke frontend
        res.json(response.data);
    } catch (error) {
        console.error("Error fetching restaurants:", error);
        res.status(500).json({ error: "Failed to fetch restaurants" });
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
