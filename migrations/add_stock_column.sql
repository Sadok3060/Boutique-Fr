-- Ajouter la colonne stock si elle n'existe pas
DO $$
BEGIN
    IF NOT EXISTS (
        SELECT 1 
        FROM information_schema.columns 
        WHERE table_name = 'product' 
        AND column_name = 'stock'
    ) THEN
        ALTER TABLE product ADD COLUMN stock INT NOT NULL DEFAULT 0;
    END IF;
END $$;